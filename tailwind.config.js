/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/layout/template.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("tailwindcss-animated")],
};
