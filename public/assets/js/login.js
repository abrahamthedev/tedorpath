document.addEventListener('DOMContentLoaded', function() {
  // Only run on desktop
  if (window.innerWidth >= 1024) {
    const messages = [
      {
        title: "Welcome to Tedor Path",
        text: "Discover a smarter way to spend your summer — filled with learning, growth, and purpose."
      },
      {
        title: "Build Skills. Build Confidence.",
        text: "From math to language mastery, our programs empower students to thrive academically and personally."
      },
      {
        title: "Learn from Elite Teachers",
        text: "Our handpicked experts provide one-on-one guidance tailored to every learner's journey."
      },
      {
        title: "Turn Summer Into a Launchpad",
        text: "Forget passive breaks — Tedor Path makes your summer the start of something big and meaningful."
      },
      {
        title: "Join the Tedor Movement",
        text: "Explore your passions, master key skills, and walk a path with purpose and direction."
      }
    ];

    const titleElement = document.getElementById('message-title');
    const textElement = document.getElementById('message-text');
    let currentIndex = 0;
    
    // Create enhanced cursor element
    const createCursor = () => {
      const cursor = document.createElement('span');
      cursor.className = 'typing-cursor';
      
      // Optional: Add dynamic styles for even more control
      cursor.style.cssText = `
        display: inline-block;
        width: 3px;
        height: 1.2em;
        background: currentColor;
        vertical-align: middle;
        margin-left: 2px;
        font-weight: bold;
        animation: blink 1s step-end infinite;
        border-radius: 1px;
      `;
      
      return cursor;
    };

    // Human-like typing with random speed variation
    const typeWriter = (element, text, speed, callback) => {
      let i = 0;
      element.innerHTML = '';
      const cursor = createCursor();
      element.appendChild(cursor);
      
      const type = () => {
        if (i < text.length) {
          // Random speed variation (human-like typing)
          const currentSpeed = speed * (0.7 + Math.random() * 0.6);
          
          // Occasionally pause longer (like thinking)
          if (i > 0 && i % 10 === 0 && Math.random() > 0.7) {
            setTimeout(type, speed * 5);
          } else {
            setTimeout(type, currentSpeed);
          }
          
          // Add the next character
          element.insertBefore(document.createTextNode(text.charAt(i)), cursor);
          i++;
        } else {
          cursor.remove();
          if (callback) callback();
        }
      };
      
      type();
    };

    // Show messages sequence
    const showMessage = () => {
      const {title, text} = messages[currentIndex];
      
      // Clear both elements completely
      titleElement.innerHTML = '';
      textElement.innerHTML = '';
      
      // Reset opacity
      titleElement.style.opacity = 1;
      textElement.style.opacity = 1;
      
      // Type title first
      typeWriter(titleElement, title, 70, () => {
        // Only after title completes, type the text
        typeWriter(textElement, text, 40, () => {
          // Wait 5 seconds then move to next message
          setTimeout(() => {
            // Fade out both elements
            titleElement.style.opacity = 0;
            textElement.style.opacity = 0;
            
            // After fade completes, show next message
            setTimeout(() => {
              currentIndex = (currentIndex + 1) % messages.length;
              showMessage();
            }, 500); // Match this with fade duration
          }, 5000);
        });
      });
    };

    if (titleElement && textElement) {
      showMessage();
    }
  }
});