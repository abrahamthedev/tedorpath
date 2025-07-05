<div class="space-y-6 animate-fade" data-scroll data-scroll-delay="0.5">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-white mb-5 pb-2 border-b border-gray-200 dark:border-gray-700 font-heading interactive-underline">
            <?= $config['newsletter']['title'] ?>
        </h4>
        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4 font-body">
            <?= $config['newsletter']['description'] ?>
        </p>
        <form class="flex flex-col sm:flex-row gap-2 animate-fade" data-scroll data-scroll-delay="0.55">
            <input type="email" placeholder="Your email" 
                   class="flex-grow px-4 py-2 text-sm text-gray-700 dark:text-white border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 transition-all duration-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <button type="submit" 
                    class="px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded-lg font-heading transition-colors duration-300 interactive-scale">
                Subscribe
            </button>
        </form>
    </div>
    
    <div class="animate-fade" data-scroll data-scroll-delay="0.6">
        <h4 class="text-lg font-semibold text-gray-800 dark:text-white mb-5 font-heading interactive-underline">Follow Us</h4>
        <div class="flex gap-4">
            <?php foreach ($config['social'] as $index => $social): ?>
            <a href="<?= $social['url'] ?>" target="_blank" 
               class="w-10 h-10 flex items-center justify-center bg-white dark:bg-gray-700 rounded-lg shadow-sm text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors duration-300 icon-container interactive-scale"
               data-scroll
               data-scroll-delay="<?= 0.65 + ($index * 0.05) ?>">
                <?php include __DIR__.'/../icons/'.$social['icon'].'.svg'; ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>