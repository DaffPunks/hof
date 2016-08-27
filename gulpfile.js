var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'bootstrap': 'node_modules/bootstrap/dist/',
    'slick': 'node_modules/slick-carousel/slick/',
    'jquery': 'node_modules/jquery/dist/',
    'masonry': 'node_modules/masonry-layout/dist/'
};

elixir(function(mix) {
    mix.copy(paths.bootstrap + 'js/bootstrap.min.js', 'public/js/build')
        .copy(paths.bootstrap + 'fonts/**', 'public/css/fonts')
        .copy(paths.bootstrap + 'css/bootstrap.min.css', 'public/css/build')
        .copy(paths.slick + 'slick.css', 'public/css/build')
        .copy(paths.slick + 'slick-theme.css', 'public/css/build')
        .copy(paths.slick + 'fonts/**', 'public/css/build/fonts')
        .copy(paths.slick + 'ajax-loader.gif', 'public/css/build')
        .copy(paths.slick + 'slick.min.js', 'public/js/build')
        .copy(paths.jquery + 'jquery.min.js', 'public/js/build')
        .copy(paths.masonry + 'masonry.pkgd.min.js', 'public/js/build')
        .copy('resources/assets/css/fonts.css', 'public/css')
        .sass('style.scss')
        .copy('resources/assets/fonts/**', 'public/fonts')
        .copy([
            'resources/assets/js/carousel.js',
            'resources/assets/js/main.js'
        ], 'public/js')
        .copy('storage/images/**', 'public/images');





    //sass('app.scss')
    //    .copy(paths.fonts + 'bootstrap/**', 'public/build/fonts/bootstrap')
    //    .copy(paths.bootstrap + 'javascripts/bootstrap.js', 'resources/assets/js')
    //    .copy('resources/assets/js/analyticstracker.js', 'public/js')
    //    .scripts([
    //        "jquery.js",
    //        "bootstrap.js",
    //        "app.js"
    //    ])
    //    .version(["public/css/app.css", "public/js/all.js"])
    //    .copy('resources/json' , 'public/json');
});