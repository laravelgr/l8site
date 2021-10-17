import { defineConfig } from 'laravel-vite'
import tailwind from 'tailwindcss'
// @ts-ignore
import autoprefixer from 'autoprefixer'

export default defineConfig()
    .withPostCSS([
        tailwind,
        autoprefixer
    ])
