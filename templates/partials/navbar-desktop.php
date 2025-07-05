<nav class="hidden md:flex md:items-center space-x-1">
  <?php 
  $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $navItems = [
    [
      'url' => '/home', 
      'text' => 'Home',
      'active' => ($currentPath === '/' || $currentPath === '/home')
    ],
    [
      'url' => '/courses', 
      'text' => 'Courses',
      'active' => strpos($currentPath, '/courses') === 0
    ],
    [
      'url' => '/about', 
      'text' => 'About',
      'active' => strpos($currentPath, '/about') === 0
    ],
    [
      'url' => '/contact', 
      'text' => 'Contact',
      'active' => strpos($currentPath, '/contact') === 0
    ]
  ];
  
  foreach ($navItems as $item): ?>
    <a href="<?= $item['url'] ?>" 
       class="px-3 py-2 text-base font-medium rounded-md transition-all duration-300 ease-out <?= $item['active'] ? 'text-blue-500 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400' ?>"
       data-nav-link>
      <span class="relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-500 after:transition-all after:duration-300 <?= $item['active'] ? 'after:w-full' : 'hover:after:w-full' ?>">
        <?= $item['text'] ?>
      </span>
    </a>
  <?php endforeach; ?>
</nav>

<div class="hidden md:flex md:items-center space-x-3">
  <?php include_once __DIR__ . '/desktop-theme-switcher.php'; ?>
  
  <a href="/login" class="px-4 py-2 text-base font-medium text-blue-500 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300 group">
    <span class="flex items-center">
      Sign In 
      <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-5 w-5 opacity-0 group-hover:opacity-100 translate-x-[-5px] group-hover:translate-x-0 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
      </svg>
    </span>
  </a>
  <a href="/register" class="px-4 py-2 text-base font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-md shadow-sm hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 hover:from-blue-600 hover:to-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
    Get Started
  </a>
</div>