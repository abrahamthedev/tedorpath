document.addEventListener('DOMContentLoaded', function() {
  // Initialize theme immediately
  initTheme();
  
  function initTheme() {
    const savedTheme = localStorage.getItem('theme');
    const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const isDark = savedTheme ? savedTheme === 'dark' : systemDark;
    
    // Force set the initial theme
    document.documentElement.classList.toggle('dark', isDark);
    updateToggleButtons(isDark);
    
    // Set up event listeners after initialization
    setupEventListeners();
  }

  function setupEventListeners() {
    document.querySelectorAll('#theme-toggle, #mobile-theme-toggle').forEach(toggle => {
      // Remove any existing listeners to prevent duplicates
      toggle.removeEventListener('click', handleThemeToggle);
      toggle.addEventListener('click', handleThemeToggle);
    });

    // System theme change listener
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
      if (!localStorage.getItem('theme')) {
        const isDark = e.matches;
        document.documentElement.classList.toggle('dark', isDark);
        updateToggleButtons(isDark);
      }
    });
  }

  function handleThemeToggle() {
    const isDark = !document.documentElement.classList.contains('dark');
    document.documentElement.classList.toggle('dark', isDark);
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
    updateToggleButtons(isDark);
  }

  function updateToggleButtons(isDark) {
    document.querySelectorAll('.theme-toggle-button').forEach(button => {
      const ball = button.querySelector('.theme-toggle-ball');
      if (ball) {
        ball.style.transform = isDark ? 'translateX(1.5rem)' : 'translateX(0)';
      }
      
      // Update icon visibility
      const icons = button.querySelectorAll('svg');
      if (icons.length === 2) {
        icons[0].classList.toggle('opacity-100', !isDark);
        icons[0].classList.toggle('opacity-0', isDark);
        icons[1].classList.toggle('opacity-100', isDark);
        icons[1].classList.toggle('opacity-0', !isDark);
      }
    });
  }
});
