let mix = require('laravel-mix');

require('laravel-mix-tailwind');

if (mix.inProduction()) {
    mix.version();
}

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    // .version()
    .tailwind();
