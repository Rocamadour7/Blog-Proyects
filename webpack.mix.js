const { mix } = require('laravel-mix');

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

mix.js('node_modules/mdbootstrap/js/mdb.js', 'public/js')
   .sass('node_modules/mdbootstrap/sass/mdb.scss', 'public/css')
   .js('node_modules/mdbootstrap/js/tether.js', 'public/js');
