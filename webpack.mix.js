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

/* mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css'); */

mix.styles([
  'front/css/all.min.css',
  'front/css/bootstrap.min.css',
  'front/css/style_ar.css'
], 'front/css/all_css_minify.css');

mix.scripts([
  'front/js/jquery-3.3.1.min.js',
  'front/js/popper.min.js',
  'front/js/scribt.js'
], 'front/js/all_script_minify.js');
