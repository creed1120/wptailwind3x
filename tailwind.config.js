module.exports = {
  content: [
    'index.php'
  ],     // This key was called 'purge' in Tailwind CSS v2
  darkmode: 'class', // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}