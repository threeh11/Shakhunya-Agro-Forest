/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors:
    {
      'black': '#333333',
      'greyLight': '#CCCCCC',
      'white': '#FFFFFF',
      'head': '#FAFAFA',
      'grey': '#707070'
    }
  },
  plugins: [require("daisyui")],
}
