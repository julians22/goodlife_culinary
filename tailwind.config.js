import tailwindcssMotion from "tailwindcss-motion"
import tailwindcssIntersect from "tailwindcss-intersect"
import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
        aspectRatio: {
            '3-4': '3/4',
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1.5rem',
                lg: '3rem',
                xl: '5rem',
                '2xl': '6rem'
            }
        },
        colors: {
            goodlife: {
                bronze: '#c37937',
                sand: '#efd1a1',
                beige: '#fff8eb',
                orange: '#f84600',
                peanut: '#e5a345'
            }
        },
        fontFamily: {
            'sans': ['Poppins', ...defaultTheme.fontFamily.sans],
        }
    },
  },
  plugins: [tailwindcssMotion, tailwindcssIntersect],
}

