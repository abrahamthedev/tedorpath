<?php 
$content = include __DIR__.'/../config/home-content.php';
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <!-- Head content -->
    <link rel="stylesheet" href="/css/animations.css">
    <link rel="stylesheet" href="/css/scroll-animations.css">
</head>
<body class="font-body bg-white dark:bg-gray-900 transition-colors duration-300">
    <!-- Header -->
    <?php include __DIR__.'/partials/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="relative h-[90vh] flex items-center bg-gradient-to-br from-blue-50/50 to-white dark:from-gray-800 dark:to-gray-900 overflow-hidden">
            <div class="absolute inset-0 opacity-10 dark:opacity-5 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMwMDAwMDAiIGZpbGwtb3BhY2l0eT0iMC4yIj48cGF0aCBkPSJNMzYgMzRWNmgyNHYyOEgzNnptMCAyNEg2VjZoMzB2MjR6TTYgNjBoMzBWMzZINnYyNHoiLz48L2c+PC9nPjwvc3ZnPg==')]"></div>
            
            <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6 font-heading" data-scroll="fade-down">
                    <?= $content['hero']['title'] ?>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto mb-10" data-scroll="fade-down" data-scroll-delay="0.1">
                    <?= $content['hero']['subtitle'] ?>
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center" data-scroll="fade-up" data-scroll-delay="0.2">
                    <a href="<?= $content['hero']['cta_primary']['url'] ?>" class="<?= $content['hero']['cta_primary']['class'] ?>">
                        <?= $content['hero']['cta_primary']['text'] ?>
                    </a>
                    <a href="<?= $content['hero']['cta_secondary']['url'] ?>" class="<?= $content['hero']['cta_secondary']['class'] ?>">
                        <?= $content['hero']['cta_secondary']['text'] ?>
                    </a>
                </div>
            </div>
            
            <!-- Animated scroller -->
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2" data-scroll="fade-in" data-scroll-delay="0.5">
                <div class="animate-bounce w-8 h-14 border-4 border-blue-500 dark:border-blue-400 rounded-full flex justify-center p-1">
                    <div class="w-2 h-2 bg-blue-500 dark:bg-blue-400 rounded-full animate-pulse"></div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-24 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16" data-scroll="fade-down">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white font-heading">
                        <?= $content['features']['title'] ?>
                    </h2>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                        <?= $content['features']['description'] ?>
                    </p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <?php foreach ($content['features']['items'] as $index => $feature): ?>
                    <div class="scroll-card bg-white dark:bg-gray-800 p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100 dark:border-gray-700"
                         data-scroll data-scroll-delay="<?= $index * 0.1 ?>">
                        <div class="w-14 h-14 <?= $feature['icon_bg'] ?> rounded-full flex items-center justify-center mb-6">
                            <?php include "../templates/icons/{$feature['icon']}.svg"; ?>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white font-heading mb-3">
                            <?= $feature['title'] ?>
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            <?= $feature['description'] ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-24 bg-gray-50 dark:bg-gray-800">
            <?php include __DIR__.'/partials/testimonials.php'; ?>
        </section>

        <!-- CTA Section -->
        <section class="py-24 bg-gradient-to-r from-blue-500 to-blue-600 dark:from-blue-600 dark:to-blue-700 text-white">
            <div class="max-w-7xl mx-auto px-6 text-center" data-scroll>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 font-heading" data-scroll="fade-down">
                    <?= $content['cta']['title'] ?>
                </h2>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-10" data-scroll="fade-down" data-scroll-delay="0.1">
                    <?= $content['cta']['description'] ?>
                </p>
                <div data-scroll="fade-up" data-scroll-delay="0.2">
                    <a href="<?= $content['cta']['button']['url'] ?>" class="<?= $content['cta']['button']['class'] ?>">
                        <?= $content['cta']['button']['text'] ?>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include __DIR__.'/partials/footer.php'; ?>

    <script src="/js/interactions.js"></script>
    <script src="/js/scroll-system.js"></script>
</body>
</html>