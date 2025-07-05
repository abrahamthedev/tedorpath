<?php
$content = include '../config/home-config.php';
$section = $content['why_choose_us'];
?>

<section class="relative py-24 bg-white dark:bg-gray-800 overflow-hidden border-t border-gray-100 dark:border-gray-700">
  <!-- Shared Background Pattern -->
  <div class="absolute inset-0 opacity-10 dark:opacity-[0.03] bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMwMDAwMDAiIG9wYWNpdHk9IjAuMSI+PHBhdGggZD0iTTM2IDM0YzAtMS4xLjktMiAyLTJoMTZjMS4xIDAgMiAuOSAyIDJ2MTZjMCAxLjEtLjkgMi0yIDJoLTE2Yy0xLjEgMC0yLS45LTItMnYtMTZ6Ii8+PC9nPjwvZz48L3N2Zz4=')]"></div>

  <!-- Animated Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <?php foreach ($section['background_elements'] as $index => $element): ?>
    <div class="absolute <?= $element['position'] ?> <?= $element['class'] ?> 
                animate-float-3d opacity-80 dark:opacity-30"
         style="animation-delay: <?= $index * 0.3 ?>s;"></div>
    <?php endforeach; ?>
  </div>
  
  <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
    <!-- Title Section (Fixed visibility) -->
    <div class="opacity-100 animate-fade-in">
      <h2 class="text-3xl md:text-4xl font-semibold text-orange-500 dark:text-orange-400 font-heading tracking-tight">
        <?= $section['title'] ?>
      </h2>
      <p class="mt-4 text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
        <?= $section['description'] ?>
      </p>
    </div>

    <!-- Cards -->
    <div class="grid md:grid-cols-3 gap-8 mt-16 text-left">
      <?php foreach ($section['cards'] as $index => $card): ?>
      <div class="bg-white/90 dark:bg-gray-700/90 backdrop-blur-sm border border-gray-200 dark:border-gray-600 rounded-xl p-8 
                hover:shadow-lg transition-all duration-300 hover:-translate-y-2
                animate-scroll"
           style="transition-delay: <?= $index * 0.1 ?>s;">
        <div class="w-12 h-12 <?= $card['bg_color'] ?> rounded-full flex items-center justify-center mb-4 
                    transform transition-all duration-500 group-hover:rotate-[15deg]">
          <?php include "../templates/icons/{$card['icon']}.svg"; ?>
        </div>
        <h3 class="text-xl font-heading text-gray-800 dark:text-white font-semibold"><?= $card['title'] ?></h3>
        <p class="mt-3 text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
          <?= $card['description'] ?>
        </p>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- CTA -->
    <div class="mt-16 animate-fade-in" style="animation-delay: 0.4s">
      <a href="<?= $section['cta']['url'] ?>" 
         class="<?= $section['cta']['class'] ?> hover:shadow-lg dark:hover:shadow-orange-400/20">
        <?= $section['cta']['text'] ?>
      </a>
    </div>
  </div>
</section>
