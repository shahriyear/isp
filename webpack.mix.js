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


mix.styles([
    'public/assets/libs/chartist/dist/chartist.min.css',
    'public/assets/extra-libs/c3/c3.min.css',
    'public/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css',
    'public/assets/dist/css/style.min.css',
    'public/assets/datepicker/bootstrap-datepicker.min.css',
    'public/assets/libs/select2/dist/css/select2.min.css',
    'public/assets/fancybox/jquery.fancybox.min.css',
    'public/assets/dist/css/custom_style.css',
], 'public/css/all.css');


// assets/libs/jquery/dist/jquery.min.js
mix.scripts([
    'public/assets/dist/js/email-decode.min.js',
    'public/assets/libs/jquery/dist/jquery.min.js',
    'public/assets/libs/popper.js/dist/umd/popper.min.js',
    'public/assets/libs/bootstrap/dist/js/bootstrap.min.js',
    'public/assets/dist/js/app.min.js',
    'public/assets/dist/js/app.init.horizontal.js',
    'public/assets/dist/js/app-style-switcher.horizontal.js',
    'public/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js',
    'public/assets/extra-libs/sparkline/sparkline.js',
    'public/assets/dist/js/waves.js',
    'public/assets/dist/js/sidebarmenu.js',
    'public/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js',
    'public/assets/fancybox/jquery.fancybox.min.js',
    'public/assets/libs/select2/dist/js/select2.min.js',
    'public/assets/dist/js/pages/forms/select2/select2.init.js',
    'public/assets/datepicker/bootstrap-datepicker.min.js',
    'public/assets/jquery-validate/jquery.validate.min.js',
    'public/assets/jquery-validate/additional-methods.min.js',
    'public/assets/animate/animate.js',
    'public/assets/dist/js/custom.js',
], 'public/js/all.js');

