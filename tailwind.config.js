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
            cream: "#ece1d9",
            customTeal: "#053d3c",
            },
        },
    fontFamily: {
        dela: ['Dela Gothic One'],
        poppins: ['Poppins']
    },
    },
    plugins: [],
    }
    