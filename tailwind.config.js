/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    extend: {
        aspectRatio: {
            '3-4': '3/4',
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem'
            }
        },
        colors: {
            goodlife: {
                green: '#008155',
                orange: '#ff2b00',
                butter: '#fffaeb'
            }
        }
    },
  },
  plugins: [],
}

