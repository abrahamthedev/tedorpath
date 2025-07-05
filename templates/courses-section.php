<!-- courses-section.php -->
<?php
$section = $content['courses'];
?>

<section class="relative py-24 bg-white/95 dark:bg-gray-800/95 overflow-hidden border-t border-gray-100/50 dark:border-gray-700/30 transition-colors duration-500">
  <!-- Consistent background pattern with subtle animation -->
  <div class="absolute inset-0 opacity-10 dark:opacity-[0.03] bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMwMDAwMDAiIG9wYWNpdHk9IjAuMSI+PHBhdGggZD0iTTM2IDM0YzAtMS4xLjktMiAyLTJoMTZjMS4xIDAgMiAuOSAyIDJ2MTZjMCAxLjEtLjkgMi0yIDJoLTE2Yy0xLjEgMC0yLS45LTItMnYtMTZ6Ii8+PC9nPjwvZz48L3N2Zz4=')] animate-gradient-shift" 
       style="animation-duration: 70s;"></div>

  <!-- Animated Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <?php foreach ($section['background_elements'] as $index => $element): ?>
    <div class="absolute <?= $element['position'] ?> <?= $element['class'] ?> 
                animate-float opacity-80 dark:opacity-30"
         style="animation-delay: <?= $index * 0.3 ?>s;
                animation-duration: <?= 15 + ($index * 3) ?>s;"></div>
    <?php endforeach; ?>
  </div>
  
  <div class="max-w-6xl mx-auto px-6 relative z-10">
    <!-- Animated heading section -->
    <div class="text-center mb-16 animate-entrance">
      <h2 class="text-3xl md:text-4xl font-heading font-semibold text-blue-600 dark:text-blue-400 tracking-tight">
        <span class="animate-text-reveal inline-block" style="animation-delay: 0.1s">
          <?= $section['title'] ?>
        </span>
      </h2>
      <p class="mt-6 text-xl sm:text-xl text-gray-700 dark:text-gray-300 opacity-90 animate-entrance animate-delay-1">
        <?= $section['subtitle'] ?>
      </p>
      <p class="mt-4 text-gray-600 dark:text-gray-300 max-w-2xl mx-auto animate-entrance animate-delay-2">
        <?= $section['description'] ?>
      </p>
    </div>

    <!-- Animated course cards -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($section['items'] as $i => $course): ?>
      <div class="bg-white/95 dark:bg-gray-700/95 backdrop-blur-sm p-8 rounded-xl border border-gray-200/50 dark:border-gray-600/30 
                hover:shadow-lg transition-all duration-300 interactive-scale
                animate-entrance"
           style="animation-delay: <?= 0.3 + ($i * 0.1) ?>s;">
        <div class="flex justify-center mb-6 transform transition-all duration-500 hover:scale-110">
          <div class="w-24 h-24 p-2 flex items-center justify-center">
            <?php 
            $iconPath = "../templates/icons/{$course['icon']}.svg";
            if (file_exists($iconPath)) {
                $svg = file_get_contents($iconPath);
                $svg = str_replace(
                    '<svg ',
                    '<svg class="w-full h-full text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-300 transition-colors duration-300" ',
                    $svg
                );
                echo $svg;
            } else {
                echo '<div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3/4 h-3/4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                      </div>';
            }
            ?>
          </div>
        </div>
        <h3 class="text-xl font-heading font-semibold text-gray-800 dark:text-white interactive-underline">
          <?= $course['title'] ?>
        </h3>
        <p class="mt-3 text-gray-600 dark:text-gray-300 leading-relaxed text-sm">
          <?= $course['description'] ?>
        </p>
        <?php if (isset($course['badge'])): ?>
        <span class="inline-block mt-3 px-2 py-1 text-xs font-semibold rounded-full <?= $course['badge'] === 'New' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : 'bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200' ?> 
                    transition-all duration-300 hover:scale-105">
          <?= $course['badge'] ?>
        </span>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Animated CTA button -->
    <div class="mt-16 text-center animate-entrance animate-delay-4">
      <a href="<?= $section['cta']['url'] ?>" 
         class="<?= $section['cta']['class'] ?> hover:shadow-lg dark:hover:shadow-blue-400/20 interactive-scale">
        <span class="relative z-10"><?= $section['cta']['text'] ?></span>
        <span class="absolute inset-0 bg-white/10 opacity-0 hover:opacity-100 transition-opacity duration-300 rounded-lg"></span>
      </a>
    </div>
  </div>
</section>
