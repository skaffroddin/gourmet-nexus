/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./resources/**/*.html",
  ],
  theme: {
      extend: {},
  },
  plugins: [
      require('flowbite/plugin')
  ],
}
