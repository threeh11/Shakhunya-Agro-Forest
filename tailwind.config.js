/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'sm': {'max':'640px'},
      'md': {'max':'768px'},
      'lg': {'max':'1024px'},
      'xl': {'max':'1280px'},
      '2xl': {'max':'1536px'},
    },
    extend: {
      fontFamily:
      {
        Manrope: ['Manrope'],
      },
    },
    colors: {'head': '#FAFAFA', 'gray': '#707070', 'black': '#333333', 'accent': '#FFED4E', 'orange': '#f97316', 'grayUltraLight': '#E7E7E7', 'grayLight': '#CCCCCC', 'red':'#DC143C'}
  },
  // plugins: [require("daisyui")],
}
