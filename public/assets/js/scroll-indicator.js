class ScrollIndicator {
  constructor() {
    this.indicator = document.getElementById('scrollIndicator');
    if (!this.indicator) return;

    this.scrollThreshold = 150;
    this.scrollAmount = window.innerHeight * 0.85;
    this.isAtTop = true;
    this.lastScrollTime = Date.now();
    this.scrollTimeout = null;
    this.animationFrame = null;

    this.init();
  }

  init() {
    this.setupAccessibility();
    this.setupEventListeners();
    this.checkPosition();
    
    // Initial delay for better UX
    setTimeout(() => {
      if (this.isAtTop) this.show();
    }, 1800);
  }

  setupAccessibility() {
    this.indicator.setAttribute('role', 'button');
    this.indicator.setAttribute('aria-label', 'Scroll down');
    this.indicator.setAttribute('aria-hidden', 'true');
  }

  show() {
    if (document.body.classList.contains('menu-open')) return;
    
    this.indicator.classList.add('visible');
    this.indicator.setAttribute('aria-hidden', 'false');
    
    // Add micro-interaction
    setTimeout(() => {
      this.indicator.classList.add('initial-pulse');
      setTimeout(() => {
        this.indicator.classList.remove('initial-pulse');
      }, 1000);
    }, 300);
  }

  hide() {
    this.indicator.classList.remove('visible');
    this.indicator.setAttribute('aria-hidden', 'true');
  }

  throttle(func, limit) {
    let lastFunc;
    let lastRan;
    return function() {
      const context = this;
      const args = arguments;
      if (!lastRan) {
        func.apply(context, args);
        lastRan = Date.now();
      } else {
        clearTimeout(lastFunc);
        lastFunc = setTimeout(function() {
          if ((Date.now() - lastRan) >= limit) {
            func.apply(context, args);
            lastRan = Date.now();
          }
        }, limit - (Date.now() - lastRan));
      }
    }
  }

  checkPosition() {
    cancelAnimationFrame(this.animationFrame);
    this.animationFrame = requestAnimationFrame(() => {
      const currentScroll = window.scrollY;
      this.isAtTop = currentScroll <= this.scrollThreshold;
      
      if (this.isAtTop && 
          !document.body.classList.contains('page-loading') && 
          !document.body.classList.contains('menu-open')) {
        this.show();
      } else {
        this.hide();
      }
    });
  }

  setupEventListeners() {
    const throttledCheck = this.throttle(() => {
      this.checkPosition();
    }, 100);

    window.addEventListener('scroll', throttledCheck);
    window.addEventListener('resize', () => {
      this.scrollAmount = window.innerHeight * 0.85;
    });
    window.addEventListener('load', () => this.checkPosition());
    
    document.addEventListener('mobileMenuOpen', () => this.hide());
    document.addEventListener('mobileMenuClose', () => this.checkPosition());

    this.indicator.addEventListener('click', (e) => {
      e.preventDefault();
      this.indicator.classList.add('active');
      window.scrollBy({ 
        top: this.scrollAmount, 
        behavior: 'smooth' 
      });
      setTimeout(() => {
        this.indicator.classList.remove('active');
      }, 500);
    });
  }
}

// Initialize
document.addEventListener('DOMContentLoaded', () => new ScrollIndicator());