<?php 
$rootDir = dirname(__DIR__);
$content = include $rootDir.'/config/about-config.php';
ob_start();
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include $rootDir.'/templates/head.php'; ?>

<body class="font-body bg-white text-gray-800 dark:bg-gray-900 dark:text-white">
    <?php include $rootDir.'/templates/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="relative pt-32 pb-24 bg-gray-900 overflow-hidden">
            <!-- Background image with gradient overlay -->
            <div class="absolute inset-0">
                <img src="/assets/img/about-hero.jpg" alt="Ethiopian students learning" 
                     class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gray-900 opacity-70"></div>
            </div>
                        
            <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
                <!-- Badge -->
                <span class="inline-flex dark:bg-gray-900/70 items-center px-4 py-2 rounded-full text-sm font-medium bg-white/90 text-blue-800 dark:bg-gray-800/90 dark:text-blue-200 backdrop-blur-sm shadow-sm mb-8">
                    About Us
                </span>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 font-heading text-white leading-tight">
                    <?= $content['hero']['title'] ?>
                </h1>
                
                <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                    <?= $content['hero']['subtitle'] ?>
                </p>
            </div>
        </section>

        <!-- Our Story -->
        <section id="our-story" class="py-20 md:py-28 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center">
                    <div class="relative">
                        <!-- Image container -->
                        <div class="relative rounded-xl lg:rounded-2xl overflow-hidden shadow-lg border-4 border-white dark:border-gray-800 transform transition-all duration-500 hover:shadow-xl">
                            <img src="<?= $content['story']['image'] ?>" alt="Our Story" 
                                 class="w-full h-auto min-h-[300px] md:min-h-[400px] object-cover"
                                 loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        </div>
                        
                        <!-- Stats box -->
                        <div class="absolute -bottom-6 -right-6 bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg w-3/4 border border-gray-100 dark:border-gray-700">
                            <div class="flex items-center mb-2">
                                <div class="bg-blue-100 dark:bg-blue-900 p-2 rounded-full mr-3">
                                    <?php include $rootDir.'/templates/icons/chart-bar.svg'; ?>
                                </div>
                                <h3 class="text-xl font-bold font-heading">
                                    <?= $content['story']['stats']['title'] ?>
                                </h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">
                                <?= $content['story']['stats']['description'] ?>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div>
                        <div class="flex items-center mb-6 md:mb-8">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/>
                                </svg>
                            </div>
                            <h2 class="text-3xl md:text-4xl font-bold font-heading text-gray-800 dark:text-white">
                                <?= $content['story']['title'] ?>
                            </h2>
                        </div>
                        
                        <p class="text-gray-600 dark:text-gray-300 mb-8 text-base md:text-lg leading-relaxed">
                            <?= $content['story']['description'] ?>
                        </p>
                        
                        <!-- Milestones -->
                        <ul class="space-y-5 md:space-y-6">
                            <?php foreach ($content['story']['milestones'] as $milestone): ?>
                            <li class="flex items-start group">
                                <div class="bg-blue-100 dark:bg-blue-900 p-2 md:p-3 rounded-full mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                    <?php 
                                    $iconSize = 'w-4 h-4 md:w-5 md:h-5'; // Reduced from original
                                    ?>
                                    <svg class="<?= $iconSize ?>" fill="currentColor" viewBox="0 0 24 24">
                                        <?php if ($milestone['icon'] === 'lightbulb'): ?>
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 17c-.83 0-1.5-.67-1.5-1.5h3c0 .83-.67 1.5-1.5 1.5zm3-2.5H9V15h6v1.5zm-.03-2.5H9.03C7.8 13.09 7 11.64 7 10c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.64-.8 3.09-2.03 4z"/>
                                        <?php elseif ($milestone['icon'] === 'rocket'): ?>
                                        <path d="M12 2.5s4.5 2.04 4.5 10.5c0 2.49-1.04 5.57-1.6 7H9.1c-.56-1.43-1.6-4.51-1.6-7C7.5 4.54 12 2.5 12 2.5zm2 8.5c0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2 2-.9 2-2zm-6.31 9.52c-.48-1.23-1.52-4.17-1.67-5.85L4 17l1.69-1.64 1.98 1.98-1.98 1.98zM20 17l-2.02-2.02c-.15 1.68-1.2 4.62-1.67 5.85l1.98-1.98L20 17z"/>
                                        <?php elseif ($milestone['icon'] === 'target'): ?>
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
                                        <?php endif; ?>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-base md:text-lg text-blue-600 dark:text-blue-400"><?= $milestone['year'] ?></h4>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm md:text-base"><?= $milestone['event'] ?></p>
                                </div>
                            </li><br>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-20 md:py-28 bg-gray-50 dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-14 md:mb-20">
                    <div class="inline-flex items-center justify-center bg-blue-100 dark:bg-blue-900 w-14 h-14 md:w-16 md:h-16 rounded-full mb-6 mx-auto">
                        <svg class="w-6 h-6 md:w-7 md:h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">
                        <?= $content['team']['title'] ?>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                        <?= $content['team']['description'] ?>
                    </p>
                </div><br><br>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($content['team']['members'] as $member): ?>
                    <div class="group text-center bg-white dark:bg-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                        <!-- Team member image with refined hover effect -->
                        <div class="relative overflow-hidden h-72 md:h-80">
                            <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                 loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                                <div class="text-left text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <p class="text-sm md:text-base mb-4"><?= $member['bio'] ?></p>
                                    <div class="flex space-x-4">
                                        <?php foreach ($member['social'] as $social): ?>
                                        <a href="<?= $social['url'] ?>" class="text-white hover:text-blue-300 transition-colors duration-300 transform hover:-translate-y-1">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <?php if ($social['icon'] === 'linkedin'): ?>
                                                <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                                                <?php elseif ($social['icon'] === 'github'): ?>
                                                <path d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"/>
                                                <?php endif; ?>
                                            </svg>
                                        </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member info with refined typography -->
                        <div class="p-6 md:p-8">
                            <h3 class="text-xl md:text-2xl font-bold mb-1 font-heading">
                                <?= $member['name'] ?>
                            </h3>
                            <p class="text-blue-500 dark:text-blue-400 mb-2 text-base md:text-lg"><?= $member['role'] ?></p>
                            <p class="text-gray-600 dark:text-gray-300 text-sm md:text-base"><?= $member['expertise'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Values Section - Enhanced -->
        <section class="py-20 md:py-28 bg-white dark:bg-gray-900 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute top-0 left-0 right-0 h-24 bg-gradient-to-b from-blue-50 to-transparent dark:from-gray-800/50 dark:to-transparent"></div>
            <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-blue-100/30 dark:bg-blue-900/20 blur-3xl"></div>
            
            <div class="max-w-7xl mx-auto px-6 relative">
                <div class="text-center mb-14 md:mb-20">
                    <div class="inline-flex items-center justify-center bg-blue-100 dark:bg-blue-900 w-14 h-14 md:w-16 md:h-16 rounded-full mb-6 mx-auto">
                        <svg class="w-6 h-6 md:w-7 md:h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">
                        <?= $content['values']['title'] ?>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                        <?= $content['values']['description'] ?>
                    </p>
                </div><br><br>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($content['values']['items'] as $value): ?>
                    <div class="bg-white dark:bg-gray-800 p-6 md:p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-500 border border-gray-100 dark:border-gray-700 hover:-translate-y-3 group">
                        <div class="w-12 h-12 md:w-14 md:h-14 <?= $value['icon_bg'] ?> rounded-full flex items-center justify-center mb-6 transition-all duration-500 group-hover:scale-110 mx-auto">
                            <?php 
                            // Smaller value icons
                            $valueIconSize = 'w-5 h-5 md:w-6 md:h-6'; // Reduced from original
                            ?>
                            <svg class="<?= $valueIconSize ?>" fill="currentColor" viewBox="0 0 24 24">
                                <?php if ($value['icon'] === 'home'): ?>
                                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                                <?php elseif ($value['icon'] === 'star'): ?>
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                <?php elseif ($value['icon'] === 'hammer'): ?>
                                <path d="M18 2h-2v2h-1.5l-2 4H9.01L7.5 4H6v2H4v2h1.25l1.45 2.9-3.68 3.7 1.42 1.42 3.71-3.7 2.9 1.45V18H8v2h2v-1.5h4V20h2v-2h2v-2h-2v-5.1l5.1-5.1H22V4h-4z"/>
                                <?php elseif ($value['icon'] === 'users'): ?>
                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                                <?php endif; ?>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 font-heading text-center">
                            <?= $value['title'] ?>
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 text-center text-sm md:text-base leading-relaxed">
                            <?= $value['description'] ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

<!-- Enhanced About Page CTA Section -->
<section class="py-24 bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-700 dark:to-indigo-700 text-white">
    <!-- Subtle texture overlay -->
    <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDYwIDYwIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRWNmgyNHYyOEgzNnptMCAyNEg2VjZoMzB2MjR6TTYgNjBoMzBWMzZINnYyNHoiLz48L2c+PC9nPjwvc3ZnPg==')]"></div>

    <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 font-heading leading-tight hover:scale-[1.01] transition-transform duration-300">
            <?= $content['cta']['title'] ?>
        </h2>
        
        <p class="text-xl text-blue-50/90 hover:text-white max-w-3xl mx-auto mb-10 leading-relaxed transition-colors duration-300">
            <?= $content['cta']['description'] ?>
        </p>
        
        <!-- Enhanced Button -->
        <div>
            <a href="<?= $content['cta']['button']['url'] ?>" 
               class="inline-flex items-center px-8 py-4 font-medium text-white bg-white/10 hover:bg-white/20 border-2 border-white/20 hover:border-white/40 rounded-xl transition-all duration-300 group">
                <span class="group-hover:translate-x-1 transition-transform duration-300">
                    <?= $content['cta']['button']['text'] ?>
                </span>
                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
    </main>

    <?php include $rootDir.'/templates/footer.php'; ?>

    <!-- JavaScript includes -->
    <script src="/assets/js/theme-switcher.js" defer></script>
    <script src="/assets/js/mobile-menu.js" defer></script>

</body>
</html>