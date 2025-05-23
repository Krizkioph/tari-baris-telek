import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
            },
            colors: {
                hitam: "#060606",
                abu: "#4D4B4B",
                emas: "#F1C40F",
            },
        },
    },
    plugins: [],
};
