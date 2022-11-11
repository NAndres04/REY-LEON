/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    // se requiere para el funcionamiento correcto de carousel
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    // se requiere para el funcionamiento correcto de carousel
    require('flowbite/plugin')
  ],
}
