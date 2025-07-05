<?php 

$rootDir = dirname(__DIR__);

// Start output buffering to capture all output
ob_start();

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <?php
    require $rootDir . '/templates/head.php';
  ?>
  <title><?= htmlspecialchars($config['site']['title'] ?? 'Tedor Path') ?></title>
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
  <?php require $rootDir . '/templates/header.php'; ?>
  <body class="font-body bg-white text-gray-800 dark:bg-gray-900 dark:text-white">

    <main class="text-gray-900 font-body dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">
      <?php
        $content = include '../config/home-config.php';
        require $rootDir . '/templates/hero-section.php';
        require $rootDir . '/templates/why-choose-us.php';
        require $rootDir . '/templates/tutors-section.php';
        require $rootDir . '/templates/courses-section.php';
        require $rootDir . '/templates/services-section.php';
      ?>
    </main>

    <?php
      require $rootDir . '/templates/footer.php';
    ?>

    <!-- JavaScript includes -->
    <script src="/assets/js/theme-switcher.js" defer></script>
    <script src="/assets/js/scroll-indicator.js" defer></script>
    <script src="/assets/js/mobile-menu.js" defer></script>

</script>
  </body>
</html>