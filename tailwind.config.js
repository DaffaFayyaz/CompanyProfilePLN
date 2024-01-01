/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                prompt: ['Prompt'],
                lexend: ['Lexend'],
                gabarito: ['Gabarito'],
                poppins: ['Poppins'],
                nunito: ['Nunito+Sans'],
            }
        },
    },
    plugins: [],
};

