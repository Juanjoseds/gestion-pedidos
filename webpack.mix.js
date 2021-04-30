const mix = require('laravel-mix');
const exec = require('child_process').exec;

require('dotenv').config();
require('laravel-mix-purgecss');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const glob = require('glob')
const path = require('path')

/*
 |--------------------------------------------------------------------------
 | Vendor assets
 |--------------------------------------------------------------------------
 */

const purge = true;

function mixAssetsDir(query, cb) {
    (glob.sync('resources/' + query) || []).forEach(f => {
        f = f.replace(/[\\\/]+/g, '/');
        cb(f, f.replace('resources', 'public'));
    });
}

const sassOptions = {};

// plugins Core stylesheets
mixAssetsDir('sass/plugins/**/!(_)*.scss', (src, dest) => mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), sassOptions).purgeCss({enabled: purge,}));

// themes Core stylesheets
mixAssetsDir('sass/themes/**/!(_)*.scss', (src, dest) => mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), sassOptions).purgeCss({enabled: purge,}));

// pages Core stylesheets
mixAssetsDir('sass/pages/**/!(_)*.scss', (src, dest) => mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), sassOptions).purgeCss({enabled: purge,}));

// Core stylesheets
mixAssetsDir('sass/core/**/!(_)*.scss', (src, dest) => mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), sassOptions).purgeCss({enabled: purge,}));

// script js
mixAssetsDir('js/scripts/**/*.js', (src, dest) => mix.scripts(src, dest));
mixAssetsDir('js/**/*.js', (src, dest) => mix.scripts(src, dest));

/*
 |--------------------------------------------------------------------------
 | Application assets
 |--------------------------------------------------------------------------
 */

mixAssetsDir('vendors/js/**/*.js', (src, dest) => mix.scripts(src, dest));
mixAssetsDir('vendors/css/**/*.css', (src, dest) => mix.copy(src, dest).purgeCss({
    enabled: purge,
}));
mixAssetsDir('vendors/css/editors/quill/fonts/', (src, dest) => mix.copy(src, dest).purgeCss({
    enabled: purge,
}));
// mix.copyDirectory('resources/images', 'public/images');


/* mix.js('resources/js/core/app-menu.js', 'public/js/core')
.js('resources/js/core/app.js', 'public/js/core')
.js('resources/js/jquery.min.js', 'public/js')
.sass('resources/sass/bootstrap.scss', 'public/css')
.sass('resources/sass/aos/aos.scss', 'public/css/aos')
.sass('resources/sass/bootstrap-extended.scss', 'public/css')
.sass('resources/sass/colors.scss', 'public/css')
.sass('resources/sass/components.scss', 'public/css')
.sass('resources/sass/custom-rtl.scss', 'public/css')
.sass('resources/sass/custom-laravel.scss', 'public/css')
.sass('resources/sass/app.scss', 'public/css')
.purgeCss({
  enabled: purge,
}); */

mix.then(function() {
    if(process.env.MIX_CONTENT_DIRECTION === "rtl"){
        let command = `node ${path.resolve('node_modules/rtlcss/bin/rtlcss.js')} -d -e ".css" ./public/css/ ./public/css/`;
        exec(command, function(err, stdout, stderr) {
            if(err !== null){
                console.log(err);
            }
        });

    }
});

mix.version();

