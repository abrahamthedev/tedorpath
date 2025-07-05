<div class="animate-fade" data-scroll data-scroll-delay="0.3">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-white mb-5 pb-2 border-b border-gray-200/50 dark:border-gray-700/50 font-heading interactive-underline">
        Contact Us
    </h4>
    <ul class="space-y-4">
        <li class="flex items-start animate-fade" data-scroll data-scroll-delay="0.35">
            <div class="bg-blue-100/50 dark:bg-gray-700/50 p-2 rounded-lg mr-4 icon-container">
                <?php include __DIR__.'/../icons/email.svg'; ?>
            </div>
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-400 font-body">Email us at</p>
                <a href="mailto:<?= $config['contact']['email'] ?>" class="text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 transition-colors duration-300">
                    <?= $config['contact']['email'] ?>
                </a>
            </div>
        </li>
        <li class="flex items-start animate-fade" data-scroll data-scroll-delay="0.4">
            <div class="bg-blue-100/50 dark:bg-gray-700/50 p-2 rounded-lg mr-4 icon-container">
                <?php include __DIR__.'/../icons/phone.svg'; ?>
            </div>
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-400 font-body">Call us at</p>
                <?php foreach ($config['contact']['phones'] as $index => $phone): ?>
                <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="text-gray-700 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 transition-colors duration-300">
                    <?= $phone ?>
                </a><br>
                <?php endforeach; ?>
            </div>
        </li>
    </ul>
</div>