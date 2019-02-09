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

mix.sass('resources/sass/home.scss', css_dir)
   .sass('resources/sass/version.scss', css_dir)
   .sass('resources/sass/main.scss', css_dir);
