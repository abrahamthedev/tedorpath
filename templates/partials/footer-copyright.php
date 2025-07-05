<!-- footer-copywright.php -->
<div class="mt-16 pt-8 border-t border-gray-200/50 dark:border-gray-700/50 flex flex-col md:flex-row justify-between items-center animate-entrance animate-delay-5">
    <p class="text-sm text-gray-500 dark:text-gray-400">
        <?= $config['copyright']['text'] ?>
    </p>
    <div class="flex gap-6 mt-4 md:mt-0">
        <?php foreach ($config['copyright']['links'] as $index => $link): ?>
        <a href="<?= $link['url'] ?>" class="text-sm text-gray-500 dark:text-gray-400 hover:text-blue-500 dark:hover:text-blue-400 transition relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-px before:bg-blue-500 before:transition-all before:duration-300 hover:before:w-full animate-entrance"
           style="animation-delay: <?= 0.5 + ($index * 0.05) ?>s">
            <?= $link['text'] ?>
        </a>
        <?php endforeach; ?>
    </div>
</div>