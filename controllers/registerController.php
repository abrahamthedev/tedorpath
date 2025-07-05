<?php
session_start();
require_once '../config/db.php'; // Database connection

// Sanitize inputs
function clean_input($data) {
    return htmlspecialchars(trim(stripslashes($data)));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Cleaned inputs
    $first_name = clean_input($_POST['first_name'] ?? '');
    $last_name = clean_input($_POST['last_name'] ?? '');
    $email = clean_input($_POST['email'] ?? '');
    $phone = clean_input($_POST['phone'] ?? '');
    $age = clean_input($_POST['age'] ?? '');
    $password = $_POST['password'] ?? '';

    // === 1. Empty field check ===
    if (!$first_name || !$last_name || !$email || !$phone || !$age || !$password) {
        redirectWithError("All fields are required.");
    }

    // === 2. Name validation (letters, spaces, 2–50 characters) ===
    if (!preg_match("/^[a-zA-Z\s]{2,50}$/", $first_name)) {
        redirectWithError("First name must contain only letters and spaces (2–50 characters).");
    }
    if (!preg_match("/^[a-zA-Z\s]{2,50}$/", $last_name)) {
        redirectWithError("Last name must contain only letters and spaces (2–50 characters).");
    }

    // === 3. Email format ===
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirectWithError("Invalid email address.");
    }

    // === 4. Phone number (Ethiopian format: 09XXXXXXXX or 07XXXXXXXX) ===
    if (!preg_match("/^(09|07)[0-9]{8}$/", $phone)) {
        redirectWithError("Phone number must start with 07 or 09 and be exactly 10 digits.");
    }

    // === 5. Age (10–100 range) ===
    if (!is_numeric($age) || (int)$age < 10 || (int)$age > 100) {
        redirectWithError("Age must be a number between 10 and 100.");
    }

    // === 6. Password validation (min 6 characters, must contain letters + digits) ===
    if (strlen($password) < 6 || !preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)) {
        redirectWithError("Password must be at least 6 characters and contain both letters and numbers.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // === 7. Duplicate email check ===
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            redirectWithError("This email is already registered.");
        }
        $stmt->close();

        // === 8. Duplicate phone number check ===
        $stmt = $conn->prepare("SELECT id FROM users WHERE phone = ?");
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            redirectWithError("This phone number is already registered.");
        }
        $stmt->close();

        // === 9. Insert user ===
        $role = 'student';
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, phone, age, password, user_role) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssiss", $first_name, $last_name, $email, $phone, $age, $hashed_password, $role);

        if ($stmt->execute()) {
            // Login user automatically
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_role'] = $role;

            session_regenerate_id(true);
            header("Location: ../public/dashboard.php");
            exit();
        } else {
            redirectWithError("Failed to register. Please try again.");
        }

    } catch (Exception $e) {
        error_log("Registration Error: " . $e->getMessage());
        redirectWithError("A server error occurred. Please try again later.");
    }

} else {
    redirectWithError("Invalid request method.");
}


// 🔁 Reusable redirect error helper
function redirectWithError($msg) {
    header("Location: ../public/register.php?error=" . urlencode($msg));
    exit();
}
?>
