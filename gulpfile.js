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

elixir(function(mix) {
    mix.less('app.less');
});

elixir(function(mix) {
   mix.scripts([
       'analytics-tracking.js',
       'faq.js',
       'form-validator.js',
       'lesson-picker.js',
       'scroll.js'
   ], 'public/js/app.js');
});

elixir(function(mix) {
   //mix.version(['css/app.css', 'js/app.js']);
});
