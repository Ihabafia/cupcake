const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .options({
        processCssUrls: false,
        postCss: [require('tailwindcss')],
    })
    .browserSync({
        proxy: process.env.MIX_APP_HOST,
        host: process.env.MIX_APP_HOST,
        port: 8000,
        open: 'external',
        watchOptions: {
            ignored: /node_modules/,
        },
    })
    .version();
