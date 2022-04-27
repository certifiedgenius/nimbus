// webpack.mix.js

const mix = require('laravel-mix');

mix
.js('assets/js/script.js', 'dist/').setPublicPath('dist')
.sass('assets/css/index.css', 'dist/')
.postCss('assets/css/index.css', 'dist/');
