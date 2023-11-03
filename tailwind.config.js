/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    color:{
      'primary': '#8d99ae',
      'secondary': '#edf2f4',
      'primary-dark': '#2b2d42',
      'primary-red': '#ef233c',
      'secondary-red': '#d90429',
    },
    fontFamily:{
      nunito:['Nunito',]
    },
    extend: {

    },
  },
  plugins: [],
}

