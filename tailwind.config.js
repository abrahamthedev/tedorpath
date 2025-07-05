/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./**/*.php", 
    "./**/*.html",
    "./public/assets/js/*.js",
    "./public/assets/css/*.css",
    "./public/assets/css/animations.css",
    "./templates/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        azure: '#007FFF',
        tdo: '#FF6B00',
        // Add standard colors you're using
        gray: {
          200: '#e5e7eb',
          300: '#d1d5db',
          600: '#4b5563',
          700: '#374151',
          800: '#1f2937',
          900: '#111827',
        },
        blue: {
          400: '#60a5fa',
          500: '#3b82f6',
        },
        orange: {
          500: '#f59e0b',
        }
      },
      fontFamily: {
        body: ['Lora', 'serif'],
        heading: ['Space Grotesk', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
