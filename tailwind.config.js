/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      sans: ["NeuethingSans"],
    },
    extend: {
      padding: {
        clamp: 'clamp(176px, 20%, 20%)',
      }
    },
  },
  plugins: [],
}

