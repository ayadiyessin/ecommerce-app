import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue' // convugiration mta vue 3al laravel

export default defineConfig({
    plugins: [
        vue(), // convugiration mta vue 3al laravel
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
