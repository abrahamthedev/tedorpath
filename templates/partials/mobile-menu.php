<!-- Overlay - cover entire screen -->
<div id="menu-overlay"></div>

<!-- Mobile Menu -->
<div id="mobile-menu">
  <div class="p-6 h-full flex flex-col overflow-y-auto">
    <div class="flex justify-between items-center mb-8">

      <?php include_once __DIR__ . '/mobile-theme-switcher.php'; ?>
      
      <!-- Close Button -->
      <button id="mobile-close" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200">
        <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
        
    <nav class="space-y-4 flex-grow">
      <?php
      $mobileNavItems = [
        ['url' => '/', 'text' => 'Home', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
        ['url' => '/courses', 'text' => 'Courses', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
        ['url' => '/about', 'text' => 'About', 'icon' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
        ['url' => '/contact', 'text' => 'Contact', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z']
      ];
      
      foreach ($mobileNavItems as $item): ?>
        <a href="<?= $item['url'] ?>" class="block px-4 py-3 text-lg font-medium text-gray-800 dark:text-gray-100 rounded-lg hover:bg-gray-100/50 dark:hover:bg-gray-700/50 transition-colors duration-300 flex items-center">
          <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $item['icon'] ?>" />
          </svg>
          <?= $item['text'] ?>
        </a>
      <?php endforeach; ?>
    </nav>

    <div class="mt-auto pt-8 space-y-4 border-t border-gray-200 dark:border-gray-700">
      <a href="/login" class="block w-full px-6 py-3 text-center font-medium text-blue-500 border border-blue-500 rounded-lg hover:bg-blue-500/10 dark:hover:bg-blue-500/20 transition-colors duration-300">
        Login
      </a>
      <a href="/register" class="block w-full px-6 py-3 text-center font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow hover:shadow-md transform hover:-translate-y-0.5 transition-all duration-300">
        Sign Up
      </a>
    </div>
  </div>
</div>