<?php
// File: public/register.php
require_once '../config/db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $age = trim($_POST['age']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm_password']);
    $userRole = 'student'; // default role for new users

    if (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($age) || empty($password) || empty($confirmPassword)) {
        $message = 'Please fill in all fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Invalid email format.';
    } elseif (!is_numeric($age) || $age < 10) {
        $message = 'Please enter a valid age (10 or older).';
    } elseif ($password !== $confirmPassword) {
        $message = 'Passwords do not match.';
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $message = 'This email is already registered.';
        } else {
            // Insert new user
            $hashedPassword = password_hash($password); 
            $insertStmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, phone, age, password, user_role) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $insertStmt->bind_param('ssssiss', $firstName, $lastName, $email, $phone, $age, $hashedPassword, $userRole);

            if ($insertStmt->execute()) {
                header('Location: login.php?message=Registration successful. Please log in.');
                exit();
            } else {
                $message = 'Registration failed. Please try again.';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Register | Tedor Path</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lora:ital,wght@0,400;0,500;1,400&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #007fff;
      --brand-font: 'Lora', serif;
      --ui-font: 'Space Grotesk', sans-serif;
    }

    *, *::before, *::after {
      box-sizing: border-box;
    }

    body {
      background-color: #f4f6f8;
      font-family: var(--brand-font);
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      padding: 2rem 1rem;
    }

    .brand {
      position: absolute;
      top: 1rem;
      left: 1rem;
      display: flex;
      align-items: center;
      gap: 0.6rem;
      z-index: 1000;
    }

    .brand img {
      width: 44px;
      height: 44px;
      object-fit: cover;
      border-radius: 50%;
      border: 2px solid var(--primary);
    }

    .brand span {
      font-family: var(--brand-font);
      font-size: 1.5rem;
      font-weight: 500;
      color: var(--primary);
      white-space: nowrap;
    }

    .register-container {
      background-color: #fff;
      width: 100%;
      max-width: 460px;
      padding: 1rem 1.5rem 1.5rem; /* top padding increased to avoid overlap */
      border-radius: 16px;
      box-shadow: 0 6px 24px rgba(0, 0, 0, 0.12);
      margin-top: 5rem;
    }

    h2 {
      font-family: var(--ui-font);
      color: var(--primary);
      text-align: center;
      font-size: 1.75rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="number"] {
      width: 100%;
      padding: 14px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-family: var(--brand-font);
      font-size: 0.95rem;
    }

    ::placeholder {
      font-family: var(--ui-font);
      font-size: 0.9rem;
    }

    button {
      width: 100%;
      padding: 13px;
      background-color: var(--primary);
      border: none;
      color: white;
      border-radius: 10px;
      font-size: 1rem;
      font-weight: 600;
      font-family: var(--ui-font);
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #005fcc;
    }

    .message {
      color: red;
      text-align: center;
      margin-bottom: 15px;
      font-weight: 500;
      font-family: var(--brand-font);
    }

    .login-link {
      text-align: center;
      margin-top: 15px;
      font-size: 0.95rem;
      font-family: var(--brand-font);
    }

    .login-link a {
      color: var(--primary);
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    /* Mobile responsive handling */
    @media (max-width: 500px) {
      .brand img {
        width: 36px;
        height: 36px;
      }

      .brand span {
        font-size: 1.2rem;
      }

      .register-container {
        padding: 1rem 1.5rem 1.5rem;;
        margin-top: 5rem;
      }

      h2 {
        font-size: 1.4rem;
      }

      input,
      button {
        font-size: 0.95rem;
        padding: 12px;
      }
    }
  </style>

</head>

<body>

<div class="brand">
    <img src="../assets/img/logo.png" alt="Tedor Logo">
    <span>Tedor Path</span>
</div>

<div class="register-container">
    <h2>Create an Account</h2>

    <?php if (!empty($message)) : ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>
    <form action="index.php?page=register"  method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="number" name="age" placeholder="Age" min="10" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
    </form>

    <div class="login-link">
        Already have an account? <a href="login.php">Log In</a>
    </div>
</div>

</body>
</html>
