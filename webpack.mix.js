const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
 
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
 
 mix.js('src/js/app.js', 'js')
    .sass('src/sass/app.scss', 'css').setPublicPath('dist')
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
 .version();

 mix.browserSync({
    proxy: 'wptailwind3x.test',
    // Needs files for page refresh to work
    files: [
        'src/**/*.scss', 
        '**/*.php'
    ]
  });