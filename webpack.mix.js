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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'public/assets/js/jquery-3.3.1.min.js',
    'public/assets/js/jquery-migrate-3.0.0.js',
    'public/assets/js/bootstrap.min.js',
    'public/assets/js/jquery.magnific-popup.js',
    'public/assets/js/isotope.pkgd.min.js',
    'public/assets/js/jquery.nice-select.js',
    'public/assets/js/swiper.min.js',
    'public/assets/js/jquery.waypoints.min.js',
    'public/assets/js/jquery.counterup.min.js',
    'public/assets/js/jquery.paroller.min.js',
    'public/assets/js/datepicker.min.js',
    'public/assets/js/datepicker.en.js',
    'public/assets/js/main.js',
], 'public/js/all.js');


mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery', 'jquery']
});
