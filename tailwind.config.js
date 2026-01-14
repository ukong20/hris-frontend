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
        screens: {
        // Default breakpoints:
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1200px',
        '2xl': '1536px',
        '3xl': '1920px' // 👈 Add this for extra large screens
        },
        extend: {},
    },
    plugins: [],
};
