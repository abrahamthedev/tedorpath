<?php
// Load configuration consistently
$rootDir = dirname(__DIR__);
$configPath = $rootDir . '/config/head-config.php';

if (!file_exists($configPath)) {
    die("Configuration file missing: " . basename($configPath));
}

$config = require $configPath;
?>

<!-- Favicon -->
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<!-- Meta Tags -->
<?php include $rootDir . '/templates/partials/meta.php'; ?>

<!-- Preconnect for external resources -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Critical CSS -->
<link rel="stylesheet" href="/assets/css/base.css">
<link rel="stylesheet" href="/assets/css/mobile-menu.css">

<!-- Non-critical CSS -->
<link rel="stylesheet" href="/assets/css/tailwind.css">
<link rel="stylesheet" href="/assets/css/theme-switcher.css">

<!-- Fonts -->
<link href="<?= htmlspecialchars($config['assets']['fonts']['url']) ?>" rel="stylesheet">

