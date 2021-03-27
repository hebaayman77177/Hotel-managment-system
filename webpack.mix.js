const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
<<<<<<< HEAD
 | for your Laravel applications. By default, we are compiling the CSS
=======
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
<<<<<<< HEAD

    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
 
=======
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
