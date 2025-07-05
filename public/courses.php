<?php 
$rootDir = dirname(__DIR__);
$content = include $rootDir.'/config/courses-config.php';
ob_start();
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php include $rootDir.'/templates/head.php'; ?>

<body class="font-body bg-white text-gray-800 dark:bg-gray-900 dark:text-white">
    <?php include $rootDir.'/templates/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="relative pt-32 pb-24 bg-gradient-to-br from-blue-50 to-white dark:from-gray-800 dark:to-gray-900 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <img src="/assets/img/courses-hero.jpg" 
                    alt="Students learning programming" 
                    class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gray-900 opacity-70"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 font-heading text-white">
                    <?= $content['hero']['title'] ?>
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    <?= $content['hero']['subtitle'] ?>
                </p>
                <div class="mt-10">
                    <a href="<?= $content['hero']['cta']['url'] ?>" class="<?= $content['hero']['cta']['class'] ?>">
                        <?= $content['hero']['cta']['text'] ?>
                    </a>
                </div>
            </div>
        </section>

        <!-- Course Categories - Refined Design -->
        <section class="py-20 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">
                        <?= $content['categories']['title'] ?>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                        <?= $content['categories']['description'] ?>
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <?php foreach ($content['categories']['items'] as $category): ?>
                    <div class="group relative overflow-hidden rounded-xl bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 hover:border-transparent transition-all duration-500 hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] dark:hover:shadow-[0_8px_30px_rgba(0,0,0,0.15)]">
                        <!-- Icon with Beautiful Hover Effect -->
                        <div class="h-48 bg-gray-50 dark:bg-gray-700/50 flex items-center justify-center transition-all duration-500 group-hover:bg-gray-100 dark:group-hover:bg-gray-700">
                            <div class="p-5 rounded-full bg-white dark:bg-gray-700 shadow-md border border-gray-100 dark:border-gray-600 transform transition-all duration-500 group-hover:scale-110 group-hover:shadow-lg">
                                <?php 
                                $iconPath = $rootDir . "/templates/icons/{$category['icon']}.svg";
                                if (file_exists($iconPath)) {
                                    include $iconPath;
                                } else {
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>';
                                }
                                ?>
                            </div>
                        </div>
                        
                        <!-- Content Area -->
                        <div class="p-8">
                            <!-- Title with Subtle Hover Underline -->
                            <h3 class="text-xl font-bold mb-3 font-heading text-gray-800 dark:text-white inline-block relative after:content-[''] after:absolute after:w-0 after:h-[2px] after:bg-blue-500 after:bottom-0 after:left-0 after:transition-all after:duration-300 group-hover:after:w-full">
                                <?= $category['title'] ?>
                            </h3>
                            
                            <p class="text-gray-600 dark:text-gray-300 mb-6">
                                <?= $category['description'] ?>
                            </p>
                            
                            <!-- Simplified "Explore courses" link -->
                            <a href="<?= $category['link'] ?>" 
                              class="inline-flex items-center font-medium text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors duration-300">
                                Explore courses
                                <svg class="ml-2 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                        
                        <!-- Subtle Hover Border Effect -->
                        <div class="absolute inset-0 border-2 border-transparent group-hover:border-blue-400/20 dark:group-hover:border-blue-500/10 transition-all duration-500 pointer-events-none rounded-xl"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Popular Courses -->
        <section class="py-20 bg-gray-50 dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">
                        <?= $content['popular']['title'] ?>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                        <?= $content['popular']['description'] ?>
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($content['popular']['courses'] as $course): ?>
                    <div class="bg-white dark:bg-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                        <div class="relative h-48 overflow-hidden">
                            <img src="<?= $course['image'] ?>" alt="<?= $course['title'] ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                            <div class="absolute top-4 right-4 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                <?= $course['level'] ?>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <div class="flex items-center text-yellow-400">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <?php if ($i < $course['rating']): ?>
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                        <?php else: ?>
                                            <svg class="w-4 h-4 fill-current text-gray-300" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                                <span class="text-gray-500 dark:text-gray-300 text-sm ml-2">(<?= $course['reviews'] ?>)</span>
                            </div>
                            <h3 class="text-lg font-bold mb-2 font-heading">
                                <?= $course['title'] ?>
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                <?= $course['description'] ?>
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-blue-500 dark:text-blue-400 font-bold"><?= $course['price'] ?></span>
                                <a href="<?= $course['url'] ?>" class="text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg transition-colors duration-300">
                                    Enroll Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-24 bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-700 dark:to-indigo-700 text-white">
            <div class="max-w-5xl mx-auto px-6 text-center">
                <!-- Badge with hover effect -->
                <span class="inline-block px-4 py-2 mb-6 text-sm font-semibold tracking-wider text-blue-100 bg-white/10 hover:bg-white/20 rounded-full border border-white/20 transition-colors duration-300">
                    Ready to Start?
                </span>
                
                <h2 class="text-4xl md:text-5xl font-bold mb-6 font-heading leading-tight">
                    <?= $content['cta']['title'] ?>
                </h2>
                
                <p class="text-xl text-blue-50/90 hover:text-white max-w-3xl mx-auto mb-10 leading-relaxed transition-colors duration-300">
                    <?= $content['cta']['description'] ?>
                </p>
                
                <!-- Button with enhanced hover -->
                <div class="flex justify-center">
                    <a href="<?= $content['cta']['button']['url'] ?>" 
                      class="group px-8 py-4 font-medium text-white bg-white/10 hover:bg-white/20 border-2 border-white/20 hover:border-white/40 rounded-xl transition-all duration-300 flex items-center">
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