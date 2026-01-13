import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: [
                'resources/css/custom.css', 
                'resources/js/custom.js',
                'resources/css/login.css'
            ],
            refresh: true,
        }),
    ],
});
