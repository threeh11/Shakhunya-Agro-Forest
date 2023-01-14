/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: 
      {
        Manrope: ['Manrope'],
      },
    },
    colors: {'head': '#FAFAFA', 'gray': '#707070', 'black': '#333333'}
  },
  plugins: [],
}
