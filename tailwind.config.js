import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',       // All Blade files
        './resources/css/**/*.css',                 // CSS files
        './resources/js/**/*.js',                 // JS files
        './storage/framework/views/**/*.php',     // Cached views
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
