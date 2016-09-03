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
    'masonry': 'node_modules/masonry-layout/dist/',
    'fontawesome': 'node_modules/font-awesome/',
    'fastclick': 'node_modules/fastclick/lib/',
    'gentelella': 'node_modules/gentelella/build/',
    'rangeslider': 'node_modules/ion-rangeslider/build/',
    'remodal': 'node_modules/remodal/dist/'
};

elixir(function(mix) {
    mix
        //main libs
        .copy(paths.bootstrap + 'js/bootstrap.min.js', 'public/js/build')
        .copy(paths.bootstrap + 'fonts/**', 'public/css/fonts')
        .copy(paths.bootstrap + 'css/bootstrap.min.css', 'public/css/build')
        .copy(paths.slick + 'slick.css', 'public/css/build')
        .copy(paths.slick + 'slick-theme.css', 'public/css/build')
        .copy(paths.slick + 'fonts/**', 'public/css/build/fonts')
        .copy(paths.slick + 'ajax-loader.gif', 'public/css/build')
        .copy(paths.slick + 'slick.min.js', 'public/js/build')
        .copy(paths.jquery + 'jquery.min.js', 'public/js/build')
        .copy(paths.masonry + 'masonry.pkgd.min.js', 'public/js/build')

        //admin libs
        .copy(paths.gentelella + 'css/custom.min.css', 'public/adminbuild/css/build')
        .copy(paths.gentelella + 'js/custom.min.js', 'public/adminbuild/js/build')
        .copy(paths.fontawesome + 'css/font-awesome.min.css', 'public/adminbuild/css/build')
        .copy(paths.fontawesome + 'fonts/**', 'public/adminbuild/css/fonts')
        .copy(paths.fastclick + 'fastclick.js', 'public/adminbuild/js/build')
        .copy(paths.remodal + '*.css', 'public/adminbuild/css/build')
        .copy(paths.remodal + 'remodal.min.js', 'public/adminbuild/js/build')
        //.copy(paths.rangeslider + '*.css', 'public/adminbuild/css/build')
        //.copy(paths.rangeslider + 'remodal.min.js', 'public/adminbuild/js/build')

        //custom main css
        .copy('resources/assets/css/*.*', 'public/css')

        //custom admin css
        .copy('resources/assets/css/admin/*.*', 'public/adminbuild/css/build')

        //custom fonts
        .copy('resources/assets/fonts/**', 'public/fonts')

        //custom main js
        .copy('resources/assets/js/*.*', 'public/js')
        .copy('resources/assets/js/build/*.*', 'public/js/build')

        //custom admin js
        .copy('resources/assets/js/admin/*.*', 'public/adminbuild/js')
        .copy('resources/assets/js/admin/build/*.*', 'public/adminbuild/js/build')

        //images
        .copy('storage/images/**', 'public/images')

        //scss
        .sass('style.scss')
        .sass('admin.style.scss', 'public/adminbuild/css');



});