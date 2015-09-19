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

    mix.sass('app.scss');

    mix.styles([
    	'philosopher.css',
    	// 'Julius-Sans-One.css',
    	// 'Open-Sans.css',
    	// 'Amatic-SC.css',
    	'vendor/bootstrap.css',
    	// 'select2.min.css',
    	// 'glDatePicker.default.css',
    	'app.css'
	], 'public/output/final.css', 'public/css')
	.version('public/output/final.css');

	mix.scripts([
		'libs/jquery-1.11.3.min.js',
		'libs/jquery-migrate-1.2.1.min.js',
		// 'libs/backbone.js',
		'libs/bootstrap.min.js',
		// 'libs/select2.full.min.js',
		// 'libs/react.full.js',
		// 'libs/glDatePicker.js',
		// 'libs/select2.min.js',
		'libs/TweenMax.min.js',
		// 'modules/PageDimensionMutatorModule.js',
		// 'pubsub.js',
		// 'main.js',
		// 'ajax-helpers.js',
		// 'SlideShowModule.js'
	], 'public/output/scripts.js', 'public/js');

});
