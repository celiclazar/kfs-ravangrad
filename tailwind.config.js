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
                primary: {
                    light: '#6C7F78',
                    DEFAULT: '#11362A',
                    dark: '#162A23',
                },
                secondary: {
                    light: '#C7C8C5',
                    DEFAULT: '#BEBFBC',
                    dark: '#B5B6B3',
                },
                neutral: {
                    light: '#262A29',
                    DEFAULT: '#131515',
                    dark: '#0B0C0D',
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
                },
            },
        },
        plugins: [],
    }
}

