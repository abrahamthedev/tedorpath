<!-- footer-brand.php -->
<div class="space-y-6 animate-fade-in" style="--animation-delay: 0.1s">
    <div class="flex items-center gap-3 transform transition-all duration-500 hover:scale-105">
        <!-- Logo Container -->
        <div class="flex items-center justify-center h-10 w-10">
            <div class="rounded-full ring-1 ring-blue-500 animate-pulse-slow absolute h-10 w-10"></div>
            <img class="w-10 h-10 object-cover rounded-full relative z-10" 
                 src="<?= $config['brand']['logo'] ?>" 
                 alt="TedorPath Logo">
        </div>
        
        <!-- Brand Name -->
        <h3 class="text-2xl font-medium text-gray-800 dark:text-white font-body tracking-tight relative top-[1px]">
            <span class="text-orange-500">Tedor</span><span class="text-blue-500">Path</span>
        </h3>
    </div>
    <p class="text-gray-600 dark:text-gray-300 font-body leading-relaxed">
        <?= $config['brand']['description'] ?>
    </p>
    <div class="flex items-center gap-4 pt-2">
        <span class="text-xs font-medium font-body text-gray-500 dark:text-gray-400">Certified by:</span>
        <div class="relative group">
            <img src="<?= $config['brand']['certification']['logo'] ?>" 
                alt="<?= $config['brand']['certification']['alt'] ?>" 
                class="h-16 w-16 rounded-full object-cover border-1 border-white dark:border-gray-800 shadow-sm ring-1 ring-gray-200 dark:ring-gray-700 transform transition-all duration-500 group-hover:scale-110">
            
            <div class="absolute -bottom-1 -right-1 bg-white dark:bg-gray-800 rounded-full p-0.5 shadow-sm transition-all duration-300 group-hover:rotate-12">
                <?php include __DIR__.'/../icons/verified.svg'; ?>
            </div>
        </div>
    </div>
</div>