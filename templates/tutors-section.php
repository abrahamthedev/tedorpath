<?php
$section = $content['tutors'];
?>

<section class="relative py-24 bg-gradient-to-br from-gray-100 to-gray-50 dark:from-gray-900 dark:to-gray-800">
  <!-- Matching Background Pattern -->
  <div class="absolute inset-0 opacity-10 dark:opacity-[0.03] bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMwMDAwMDAiIG9wYWNpdHk9IjAuMSI+PHBhdGggZD0iTTM2IDM0YzAtMS4xLjktMiAyLTJoMTZjMS4xIDAgMiAuOSAyIDJ2MTZjMCAxLjEtLjkgMi0yIDJoLTE2Yy0xLjEgMC0yLS45LTItMnYtMTZ6Ii8+PC9nPjwvZz48L3N2Zz4=')]"></div>
  
  <div class="max-w-6xl mx-auto px-6 relative z-10">
    <!-- Title Section (Fixed visibility) -->
    <div class="text-center mb-16 opacity-100 animate-fade-in">
      <h2 class="text-3xl md:text-4xl font-heading font-semibold text-blue-600 dark:text-blue-400 tracking-tight">
        <?= $section['title'] ?>
      </h2>
      <p class="mt-6 text-xl sm:text-xl text-gray-700 dark:text-gray-300 opacity-90">
        <?= $section['subtitle'] ?>
      </p>
      <p class="mt-4 text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
        <?= $section['description'] ?>
      </p>
    </div>

    <!-- Tutor Categories -->
    <div class="grid md:grid-cols-3 gap-8">
      <?php foreach ($section['categories'] as $index => $category): ?>
      <div class="bg-white/90 dark:bg-gray-700/90 backdrop-blur-sm p-8 rounded-xl shadow-md hover:shadow-xl 
                transition-all duration-300 hover:-translate-y-2
                animate-scroll"
           style="transition-delay: <?= $index * 0.1 ?>s;">
        <div class="w-14 h-14 <?= $category['bg_color'] ?> rounded-full flex items-center justify-center mb-6 
                    transform transition-all duration-500 hover:scale-110">
          <?php include "../templates/icons/{$category['icon']}.svg"; ?>
        </div>
        <h3 class="text-xl font-heading text-gray-800 dark:text-white font-semibold"><?= $category['title'] ?></h3>
        <p class="mt-3 text-gray-600 dark:text-gray-300 leading-relaxed"><?= $category['description'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- CTA -->
    <div class="mt-16 text-center animate-fade-in" style="animation-delay: 0.4s">
      <a href="<?= $section['cta']['url'] ?>" 
         class="<?= $section['cta']['class'] ?> hover:shadow-lg dark:hover:shadow-blue-400/20">
        <?= $section['cta']['text'] ?>
      </a>
    </div>
  </div>
</section>