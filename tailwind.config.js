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
            silver: '#C7C8C5',
            darkGreen: '#11362A',
            feldgrau: '#61736D',
            jet: '#292E2B',
            night: '#0B0C0D',
        },
        fontFamily: {
            heading: ['Oswald', 'sans-serif'],
            body: ['Oswald', 'sans-serif'],
            button: ['Josefin Sans', 'sans-serif'],
        },
        fontSize: {
            'heading': '5.375rem',
            'body': '1.667rem',
            'button': '1.338rem',
        }
    },
  },
  plugins: [],
}

