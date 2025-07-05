<?php
$section = $content['services'];
?>

<section class="relative py-24 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 overflow-hidden">
  <!-- Shared Background Pattern -->
  <div class="absolute inset-0 opacity-10 dark:opacity-[0.03] bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMwMDAwMDAiIG9wYWNpdHk9IjAuMSI+PHBhdGggZD0iTTM2IDM0YzAtMS4xLjktMiAyLTJoMTZjMS4xIDAgMiAuOSAyIDJ2MTZjMCAxLjEtLjkgMi0yIDJoLTE2Yy0xLjEgMC0yLS45LTItMnYtMTZ6Ii8+PC9nPjwvZz48L3N2Zz4=')]"></div>

  <!-- Animated Gradients -->
  <?php foreach ($section['background']['gradients'] as $index => $gradient): ?>
  <div class="absolute <?= $gradient['position'] ?> w-full h-full <?= $gradient['class'] ?> 
              animate-gradient-pulse opacity-80 dark:opacity-30"
       style="animation-delay: <?= $index * 0.5 ?>s;"></div>
  <?php endforeach; ?>

  <div class="max-w-6xl mx-auto px-6 relative z-10">
    <!-- Animated heading section -->
    <div class="text-center mb-16 opacity-100 animate-fade-in">
      <h2 class="text-3xl md:text-4xl font-heading font-semibold text-orange-500 dark:text-orange-400 tracking-tight">
        <?= $section['title'] ?>
      </h2>
      <p class="mt-4 text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
        <?= $section['description'] ?>
      </p>
    </div>

    <!-- Animated service cards -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($section['items'] as $i => $service): ?>
      <div class="bg-white/90 dark:bg-gray-700/90 backdrop-blur-sm rounded-xl p-8 shadow-md hover:shadow-xl 
                transition-all duration-300 hover:-translate-y-2 text-center border border-gray-200 dark:border-gray-600
                animate-scroll hover:animate-subtle-glow"
           style="transition-delay: <?= $i * 0.1 ?>s">
        <div class="w-14 h-14 <?= $service['icon_bg'] ?> rounded-full flex items-center justify-center mx-auto mb-6
                    transform transition-all duration-500 hover:rotate-[15deg]">
          <?php include "../templates/icons/{$service['icon']}.svg"; ?>
        </div>
        <h3 class="text-lg font-heading text-gray-800 dark:text-white font-semibold"><?= $service['title'] ?></h3>
        <p class="mt-3 text-gray-600 dark:text-gray-300 text-sm"><?= $service['description'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Animated CTA button -->
    <div class="mt-16 text-center animate-fade-in" style="animation-delay: 0.4s">
      <a href="<?= $section['cta']['url'] ?>" 
         class="<?= $section['cta']['class'] ?> hover:shadow-lg dark:hover:shadow-orange-400/20">
        <?= $section['cta']['text'] ?>
      </a>
    </div>
  </div>
</section>