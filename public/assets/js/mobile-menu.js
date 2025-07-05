document.addEventListener('DOMContentLoaded', function() {
  // Only initialize if mobile menu elements exist
  if (document.getElementById('mobile-menu') && document.getElementById('menu-toggle')) {
    setupMobileMenu();
  }

  // Close menu when pressing Escape key (only if menu exists)
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && document.getElementById('mobile-menu')) {
      closeMobileMenu();
    }
  });
});

function setupMobileMenu() {
  const menuToggle = document.getElementById('menu-toggle');
  const mobileClose = document.getElementById('mobile-close');
  const overlay = document.getElementById('menu-overlay');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (!mobileMenu) return;

  if (menuToggle) {
    menuToggle.addEventListener('click', toggleMobileMenu);
  }
  
  if (mobileClose) {
    mobileClose.addEventListener('click', closeMobileMenu);
  }
  
  if (overlay) {
    overlay.addEventListener('click', function(e) {
      if (e.target === overlay) {
        closeMobileMenu();
      }
    });
  }
  
  // Close menu when clicking on nav links (only if they exist)
  const mobileLinks = document.querySelectorAll('#mobile-menu a');
  if (mobileLinks.length > 0) {
    mobileLinks.forEach(link => {
      link.addEventListener('click', closeMobileMenu);
    });
  }
  
  // Close menu when window is resized to desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 768 && mobileMenu) {
      closeMobileMenu();
    }
  });
}

function toggleMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  if (!mobileMenu) return;
  
  if (mobileMenu.classList.contains('open')) {
    closeMobileMenu();
  } else {
    openMobileMenu();
  }
}

function openMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  const overlay = document.getElementById('menu-overlay');
  
  if (!mobileMenu || !overlay) return;
  
  // Show elements
  mobileMenu.classList.add('open');
  overlay.classList.add('open');
  
  // Lock body scroll
  document.body.classList.add('menu-open');
}

function closeMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  const overlay = document.getElementById('menu-overlay');
  
  if (!mobileMenu || !overlay) return;
  
  // Hide elements
  mobileMenu.classList.remove('open');
  overlay.classList.remove('open');
  
  // Unlock body scroll
  document.body.classList.remove('menu-open');
}