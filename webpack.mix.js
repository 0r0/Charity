const mix = require('laravel-mix');
// mix.autoload({
//     jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]
// });
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

mix.styles(['resources/assets/css/icons/icomoon/styles.css','resources/assets/css/bootstrap.css','resources/assets/css/core.css',
    'resources/assets/css/components.css','resources/assets/css/colors.css'],'public/css/all2.css');
mix.copy('resources/assets/css/icons/icomoon/fonts','public/css/fonts');

mix.js(['resources/js/theme/app_theme.js','resources/js/theme/layout_fixed_custom.js'],'public/js/app_theme.js');
// mix.react('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');
mix.extract();
mix.browserSync({
    proxy: '127.0.0.1:8000'
});


// require('theme/app_theme');
// require('theme/layout_fixed_custom');
