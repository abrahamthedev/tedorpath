<?php
session_start();

// Define public routes that don't require authentication
$publicRoutes = [
    '/',
    '/home',
    '/login',
    '/register',
    '/about',
    '/contact',
    '/courses',
    '/process-login'
];

// Get current request path
$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestPath = rtrim($requestPath, '/') ?: '/';

// Only check authentication for non-public routes
if (!in_array($requestPath, $publicRoutes) && !isset($_SESSION['user_id'])) {
    $_SESSION['redirect_url'] = $requestPath;
    header("Location: /login.php?error=Please log in first to access this page.");
    exit();
}