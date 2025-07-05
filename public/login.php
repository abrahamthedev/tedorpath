<?php
// Set the root directory path
$rootDir = dirname(__DIR__);

// Check if session is already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <title>Login | TedorPath</title>
  <?php require $rootDir . '/templates/head.php'; ?>
  <link rel="stylesheet" href="/assets/css/login.css">
</head>

<body class="bg-white text-gray-800 dark:bg-gray-900 dark:text-white transition-colors duration-200">
  <?php require $rootDir . '/templates/header.php'; ?>

  <div class="flex flex-col lg:flex-row min-h-screen">
    <!-- Left Side - Login Form (50% width on desktop) -->
    <div class="left-side w-full lg:w-1/2 flex items-center justify-center p-6 bg-gray-50 dark:bg-gray-800">
      <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 lg:p-10 z-40 border border-gray-200 dark:border-gray-700">
        <h2 class="text-3xl text-blue-600 dark:text-blue-400 font-bold font-heading text-center mb-8">Login to Your Account</h2>

        <!-- display error message -->
        <?php 
        $errorMessage = '';
        if (isset($_SESSION['login_error'])) {
            $errorMessage = $_SESSION['login_error'];
            unset($_SESSION['login_error']);
        } elseif (isset($_GET['error'])) {
            $errorMessage = $_GET['error'];
        }
        
        if (!empty($errorMessage)): ?>
          <div class="bg-red-50 dark:bg-red-900/20 border-l-4 border-red-500 dark:border-red-400 text-red-700 dark:text-red-200 p-4 mb-6 rounded">
            <?= htmlspecialchars($errorMessage) ?>
          </div>
        <?php endif; ?>

        <form action="/process-login" method="POST" class="space-y-6">
          <div>
            <label for="email" class="block text-sm font-medium font-heading text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
            <input 
              type="email" 
              name="email" 
              id="email" 
              required 
              autofocus
              placeholder="example@domain.com"
              class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500/50 dark:focus:ring-blue-400/50 transition duration-300 font-body bg-white dark:bg-gray-700 text-gray-800 dark:text-white"
            >
          </div>

          <div>
            <label for="password" class="block text-sm font-medium font-heading text-gray-700 dark:text-gray-300 mb-2">Password</label>
            <input 
              type="password" 
              name="password" 
              id="password" 
              required
              placeholder="Enter your password"
              class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-500/50 dark:focus:ring-blue-400/50 transition duration-300 font-body bg-white dark:bg-gray-700 text-gray-800 dark:text-white"
            >
          </div>

          <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white font-heading font-medium py-3 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02]">
            Login
          </button>
        </form>

        <p class="text-center text-gray-600 dark:text-gray-400 mt-6">
          Don't have an account? 
          <a href="register.php" class="text-blue-600 dark:text-blue-400 font-medium hover:underline">Register here</a>
        </p>
      </div>
    </div>

    <!-- Right Side - Brand Message (50% width on desktop) -->
    <div class="right-side w-full lg:w-1/2 bg-gray-900 text-white relative min-h-[50vh] lg:min-h-screen flex items-center justify-center">
      <div class="max-w-lg text-center lg:text-left p-12">
        <h1 id="message-title" class="text-4xl font-bold font-heading text-blue-400 mb-6"></h1>
        <p id="message-text" class="text-xl text-gray-200 font-body leading-relaxed"></p>
      </div>
    </div>
  </div>

  <!-- JavaScript includes -->
  <script src="/assets/js/theme-switcher.js" defer></script>
  <script src="/assets/js/mobile-menu.js" defer></script>
  <script src="/assets/js/login.js" defer></script>

</body>
</html>