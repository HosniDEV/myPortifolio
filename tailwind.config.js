/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'backgroundColor':'#f4f3f4',
        'secondColor':'#f4f3f4',
        'primaryColor':'#2d7fef',
      }


    },
    fontFamily:{
      'instgram':['instagram','sans-serif'],
    }
  },
  plugins: [],
}

