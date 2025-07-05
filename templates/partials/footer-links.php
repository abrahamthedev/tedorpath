<div class="animate-fade" data-scroll data-scroll-delay="0.2">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-white mb-5 pb-2 border-b border-gray-200/50 dark:border-gray-700/50 font-heading interactive-underline">
        Quick Links
    </h4>
    <ul class="space-y-3 font-body">
        <?php foreach ($config['links'] as $index => $link): ?>
        <li class="animate-fade" data-scroll data-scroll-delay="<?= 0.3 + ($index * 0.05) ?>">
            <a href="<?= $link['url'] ?>" 
               class="text-gray-600 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors duration-300">
                <?= $link['text'] ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>