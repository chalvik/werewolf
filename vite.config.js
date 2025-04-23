import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";
import tailwindcss from '@tailwindcss/vite'
import 'flowbite';


export default defineConfig({
    server: {
        https: false,
        host: true,
        port: 5173,
        hmr: { host: "localhost", protocol: "ws" },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
