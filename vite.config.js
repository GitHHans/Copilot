import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/handle_login.js',
                
            ],
            buildDirectory: 'build', // Change this if you want a different directory
            refresh: true,
        }),
    ],
});
