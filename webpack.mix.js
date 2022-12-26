let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js');
mix.styles([
    'resources/css/app.css',
    'resources/css/core.css',
    'resources/css/icon-font.css',
    'resources/css/style.css'
], 'public/css/app.css');
