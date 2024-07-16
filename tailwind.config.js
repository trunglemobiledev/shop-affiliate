/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('./resources/metronic/core/plugins/plugin'),
    require('./resources/metronic/core/plugins/components/theme'),
  ],
}

