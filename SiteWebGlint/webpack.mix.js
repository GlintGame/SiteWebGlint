const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
const js_dir = 'public/js/generated'
const css_dir = 'public/css'

mix.js('resources/js/app.js', js_dir)
   .js('resources/js/404.js', js_dir)
   .sass('resources/sass/app.scss', css_dir);
