<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../sessions/session.php';

// Ensure we have a session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Clear any previous errors
    unset($_SESSION['login_error']);

    // Sanitize user input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $_SESSION['login_error'] = "Please fill in all fields.";
        header("Location: /login");
        exit();
    }

    try {
        $stmt = $conn->prepare("SELECT id, first_name, last_name, email, password, user_role FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                // Regenerate session ID for security
                session_regenerate_id(true);
                
                // Set session variables
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'email' => $user['email'],
                    'role' => $user['user_role']
                ];

                // Redirect based on role
                header("Location: " . ($user['user_role'] === 'admin' ? '/admin' : '/dashboard'));
                exit();
            }
        }

        // Generic error message (don't reveal whether email exists)
        $_SESSION['login_error'] = "Invalid email or password";
        header("Location: /login");
        exit();

    } catch (Exception $e) {
        error_log("Login error: " . $e->getMessage());
        $_SESSION['login_error'] = "An error occurred. Please try again later.";
        header("Location: /login");
        exit();
    }
} else {
    header("Location: /login");
    exit();
}