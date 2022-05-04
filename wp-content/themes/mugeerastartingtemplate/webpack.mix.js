// webpack.mix.js

const mix = require('laravel-mix');

mix
.postCss('assets/css/index.css', 'dist')
.js('assets/js/script.js', 'dist');
