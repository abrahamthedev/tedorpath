<?php
$hero = $content['hero'];
?>

<section class="relative flex items-center justify-center min-h-[calc(100vh-64px)] overflow-hidden bg-fixed bg-cover bg-center preloader-active" 
         style="background-image: url('<?= $hero['background_image'] ?>');"
         id="hero-section">
  
  <!-- Gradient Overlay with subtle animation -->
  <div class="absolute inset-0 bg-gradient-to-br from-black/40 via-transparent to-black/60 dark:from-indigo-900/20 dark:via-transparent dark:to-violet-900/30 animate-gradient-shift"></div>
  
  <!-- Floating Particles with improved animation -->
  <div class="absolute inset-0 opacity-60 dark:opacity-40">
    <?php foreach ($hero['decorative_elements'] as $index => $element): ?>
    <div class="absolute <?= $element['position'] ?> <?= $element['class'] ?> 
                animate-float opacity-0"
         style="animation-delay: <?= $index * 0.2 ?>s; 
                will-change: transform, opacity;">
    </div>
    <?php endforeach; ?>
  </div>

  <!-- Content Container -->
  <div class="relative z-10 text-center px-6 py-20 space-y-6 w-full max-w-7xl mx-auto">
    <!-- Title with refined text reveal -->
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold font-heading leading-tight tracking-tight text-white
              animate-text-reveal"
        style="--animation-duration: 1.2s; animation-delay: 0.2s">
      <?= $hero['title'] ?>
    </h1>
    
    <!-- Subtitle with smooth entrance -->
    <p class="mt-6 text-xl sm:text-2xl text-white/90 
              animate-entrance animate-delay-3">
      <?= $hero['subtitle'] ?>
    </p>
    
    <!-- Buttons with interactive effects -->
    <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
      <?php foreach ($hero['buttons'] as $index => $button): ?>
      <a href="<?= $button['url'] ?>" 
         class="<?= $button['class'] ?> 
                animate-entrance interactive-scale
                relative overflow-hidden group"
         style="animation-delay: <?= 0.5 + ($index * 0.1) ?>s">
        <span class="relative z-10 flex items-center justify-center gap-2">
          <?= $button['text'] ?>
          <svg class="w-5 h-5 transition-all duration-300 group-hover:translate-x-1 group-hover:scale-110" 
               fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </span>
        <!-- Button hover effect -->
        <span class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-micro-bounce">
    <?php include __DIR__ . '/partials/scroll-indicator.php'; ?>
  </div>
</section>