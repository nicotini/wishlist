import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    publicDir: 'resources/assets',
    plugins: [
        laravel({
            input: [
            'resources/css/app.css', 
            'resources/js/app.js',
            'resources/assets/css/main.css',
            'resources/assets/js/main.js'
        ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~bootstrap-icons': path.resolve(__dirname, 'node_modules/bootstrap-icons'),    
            
        }
    },
});
