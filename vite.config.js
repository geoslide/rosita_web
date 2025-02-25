import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import vuetify from 'vite-plugin-vuetify'; // Importa el plugin de Vuetify

export default defineConfig({
    plugins: [
        vue(), // Plugin de Vue
        vuetify(), // Plugin de Vuetify
        laravel({
            input: [
                'resources/css/app.css', // Archivo CSS principal
                'resources/js/app.js',  // Archivo JS principal
            ],
            refresh: true, // Recargar la página cuando se detecten cambios
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js', // Alias para importaciones
        },
    },
    optimizeDeps: {
        include: ['vuetify'], // Asegura que Vuetify esté optimizado
    },
});