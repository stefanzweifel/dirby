var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.cssOutput = 'assets/css';
elixir.config.jsOutput  = 'assets/js';
elixir.config.assetsDir = 'resources/assets';

var paths = {
    'jquery': './node_modules/jquery/',
    'bootstrap': './node_modules/bootstrap-sass/assets/',
    'clipboard': './node_modules/clipboard/'
}


elixir(function(mix) {

    mix.sass("theme.scss", 'assets/css/', {includePaths: [paths.bootstrap + 'stylesheets/']})
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'assets/fonts')
        .scripts([
            paths.jquery + 'dist/jquery.js',
            paths.bootstrap +  'javascripts/bootstrap.min.js',
            paths.clipboard + 'dist/clipboard.js',
            '/assets/js/theme.js'
        ], 'assets/js/app.js', 'resources/');

});
