var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;
elixir.config.assetsPath = 'src';
elixir.config.publicPath = 'assets';

elixir(function(mix) {

    mix.sass('kubo.scss');
    mix.sass('./docs/docs.scss', './docs/docs.css');

});