import { defineConfig } from 'vite';
import path from 'node:path';

export default defineConfig({

    // WordPress entrega el CSS desde /assets/css; las imágenes se resuelven
    // de forma relativa dentro de esa misma carpeta compilada.
    base: './',

    server: {
        host: '0.0.0.0',
        port: 5173,
        strictPort: true,

        watch: {
            usePolling: true
        }
    },

    build: {

        outDir: 'assets',

        emptyOutDir: true,

        manifest: true,

        rollupOptions: {

            input: {
                app: path.resolve(__dirname, 'src/js/main.js')
            },

            output: {

                entryFileNames: 'js/[name]-[hash].js',

                chunkFileNames: 'js/[name]-[hash].js',

                assetFileNames: ({ name }) => {

                    if (!name)
                        return 'assets/[name]-[hash][extname]';

                    if (name.endsWith('.css'))
                        return 'css/[name]-[hash][extname]';

                    if (/\.(png|jpg|jpeg|gif|svg|webp)$/i.test(name))
                        return 'images/[name]-[hash][extname]';

                    if (/\.(woff2?|ttf|otf|eot)$/i.test(name))
                        return 'fonts/[name]-[hash][extname]';

                    return 'assets/[name]-[hash][extname]';
                }

            }

        }

    }

});
