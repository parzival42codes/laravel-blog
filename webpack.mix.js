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

mix.sass('resources/sass/app.scss', '/storage/styles')
    .sass('resources/sass/theme/default/theme.scss', '/storage/styles/theme/default')
    .combine([
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/jquery-ui-dist/jquery-ui.min.js',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
            'node_modules/parsleyjs/dist/parsley.min.js',
            'node_modules/parsleyjs/dist/i18n/en.js',
            'node_modules/parsleyjs/dist/i18n/de.js',
            'resources/js/webmix.js',
        ],
        'storage/app/public/js/app.js').combine([
        'storage/app/public/styles/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/jquery-ui-dist/jquery-ui.min.css',
    ],
    'storage/app/public/styles/appCombine.css')
    .sourceMaps();
