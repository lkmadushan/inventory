var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');

elixir.config.js.browserify.watchify.options.poll = true;

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

elixir(function(mix) {
    
    //This is the place, we should put our files to be copied to our directory. We 'gulp' to execute this
    
    //
    mix.sass('app.scss');
    
    //We copy fonts and font-awesome files 
    mix.copy('./node_modules/font-awesome/fonts', './public/fonts');
    mix.copy('./node_modules/bootstrap-sass/assets/fonts/bootstrap', './public/fonts/bootstrap');

    mix.browserify('app.js');
});
