<?php

// Define base paths
define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH', __DIR__);

// Custom path helpers
function config_path($file = '') {
    return BASE_PATH . '/config/' . $file;
}

function public_path($file = '') {
    return PUBLIC_PATH . '/' . $file;
}

function include_template($file) {
    require BASE_PATH . '/templates/' . $file;
}

// Load configuration and helpers
require_once config_path('db.php');
require_once config_path('settings.php');
require_once BASE_PATH . '/sessions/session.php';

// Normalize all requests
$request = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Simple URL Router
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


// Routing Logic
switch ($request) {
    case '/':
    case '/home':
        require public_path('home.php');
        break;

    case '/login':
        require public_path('login.php');
        break;

    case '/register':
        require public_path('register.php');
        break;

    case '/dashboard':
        require public_path('dashboard.php');
        break;

    case '/courses':
        require public_path('courses.php');
        break;

    case '/about':  // Add this route
        require public_path('about.php');
        break;

    case '/contact':
        require public_path('contact.php');
        break;

    case '/logout':
        require public_path('logout.php');
        break;

    case '/process-login':
        require BASE_PATH . '/controllers/loginController.php';
        break;

    default:
        http_response_code(404);
        include_template('errors/404.php');
        break;
}