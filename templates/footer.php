<?php
$config = include __DIR__.'/../config/footer-config.php';
?>

<footer class="relative bg-gray-100 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 pt-20 pb-12">
    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 relative z-10">
            <?php include __DIR__.'/partials/footer-brand.php'; ?>
            <?php include __DIR__.'/partials/footer-links.php'; ?>
            <?php include __DIR__.'/partials/footer-contact.php'; ?>
            <?php include __DIR__.'/partials/footer-social.php'; ?>
        </div>
        
        <?php include __DIR__.'/partials/footer-copyright.php'; ?>
    </div>
</footer>