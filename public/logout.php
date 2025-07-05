<?php
// File: public/logout.php

session_start(); // Start the session

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login page with a logout success message
header("Location: login.php?error=You have been logged out successfully.");
exit();
?>
