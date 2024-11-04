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
                    light: '#6C7F78',          // Hooker's green, for light primary use
                    DEFAULT: '#11362A',        // Dark green, suitable for headers
                    dark: '#162A23',           // Darker shade of green for accent or footer
                },
                secondary: {
                    light: '#BEBFBC',          // Light silver
                    DEFAULT: '#C7C8C5',        // Medium silver, for content areas
                    dark: '#B5B6B3',           // Dark silver for subtle borders or backgrounds
                },
                neutral: {
                    light: '#262A29',          // Eerie black, for neutral dark backgrounds
                    DEFAULT: '#131515',        // Slightly darker neutral, good for text or icons
                    dark: '#0B0C0D',           // Night, darkest shade for backgrounds
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

