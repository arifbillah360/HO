import { defineConfig } from 'vite'
import { resolve } from 'path'

export default defineConfig({
  build: {
    // Output bundles alongside existing assets
    outDir: 'assets/js/dist',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        'index':                resolve(__dirname, 'src/entries/index.js'),
        'web-hosting':          resolve(__dirname, 'src/entries/web-hosting.js'),
        'turbo-hosting':        resolve(__dirname, 'src/entries/turbo-hosting.js'),
        'reseller-hosting':     resolve(__dirname, 'src/entries/reseller-hosting.js'),
        'student-hosting':      resolve(__dirname, 'src/entries/student-hosting.js'),
        'business-email':       resolve(__dirname, 'src/entries/business-email.js'),
        'vps':                  resolve(__dirname, 'src/entries/vps.js'),
        'offer':                resolve(__dirname, 'src/entries/offer.js'),
        'package':              resolve(__dirname, 'src/entries/package.js'),
        'privacy-policy':       resolve(__dirname, 'src/entries/privacy-policy.js'),
        'terms-and-conditions': resolve(__dirname, 'src/entries/terms-and-conditions.js'),
      },
      output: {
        // Stable filenames — no hash — so HTML can reference them directly.
        // Cache-bust by bumping the version in npm run build or via server headers.
        entryFileNames: '[name].bundle.js',
        // Shared code (i18n.js, header.js, etc.) extracted into one shared chunk
        // so it's downloaded once and cached across all pages.
        chunkFileNames: 'shared.bundle.js',
        format: 'es',
      },
    },
    // Don't minify in a way that breaks global `window.*` assignments
    minify: 'terser',
    terserOptions: {
      compress: {
        passes: 2,
      },
      format: {
        comments: false,
      },
    },
  },
})
