<?php
$logo = $config['assets']['favicon'];
?>

<div class="flex items-center">
  <a href="/" class="flex items-center group">
    <div class="rounded-full ring-1 ring-blue-500 transition-all duration-300 group-hover:ring-2 group-hover:shadow-lg">
      <img class="w-10 h-10 object-cover rounded-full" src="<?= $logo ?>" alt="TedorPath Logo" loading="lazy">
    </div>
    <span class="ml-2 text-xl md:text-2xl font-medium text-gray-800 dark:text-gray-100 font-body tracking-tight group-hover:text-orange-500 transition-colors duration-300">
      Tedor<span class="text-blue-500 group-hover:text-blue-600 transition-colors duration-300">Path</span>
    </span>
  </a>
</div>