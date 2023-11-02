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
            cream: "#ECE1D9",
            seashell: "#F5EBE5",
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
    