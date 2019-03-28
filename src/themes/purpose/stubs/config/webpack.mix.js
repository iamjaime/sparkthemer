let mix = require('laravel-mix');
let exec = require('child_process').exec;
let path = require('path');

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

// mix
//     .sass('resources/sass/app.scss', 'public/css')
//     .js('resources/js/app.js', 'public/js')
//     .copy('node_modules/sweetalert/dist/sweetalert.min.js', 'public/js/sweetalert.min.js')
//     .sass('resources/sass/app-rtl.scss', 'public/css')
//     .then(() => {
//         exec('node_modules/rtlcss/bin/rtlcss.js public/css/app-rtl.css ./public/css/app-rtl.css');
//     })
//     .version()
//     .webpackConfig({
//         resolve: {
//             modules: [
//                 path.resolve(__dirname, 'vendor/laravel/spark-aurelius/resources/assets/js'),
//                 'node_modules'
//             ],
//             alias: {
//                 'vue$': mix.inProduction() ? 'vue/dist/vue.min' : 'vue/dist/vue.js'
//             }
//         }
//     });

mix.sass('resources/scss/purpose.scss', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/assets/libs/jquery/dist/jquery.min.js')
    .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')
    .copy('node_modules/in-view/dist/in-view.min.js', 'public/assets/libs/in-view/dist/in-view.min.js')
    .copy('node_modules/sticky-kit/dist/sticky-kit.min.js', 'public/assets/libs/sticky-kit/dist/sticky-kit.min.js')
    .copy('node_modules/svg-injector/dist/svg-injector.min.js', 'public/assets/libs/svg-injector/dist/svg-injector.min.js')
    .copy('node_modules/jquery.scrollbar/jquery.scrollbar.min.js', 'public/assets/libs/jquery.scrollbar/jquery.scrollbar.min.js')
    .copy('node_modules/jquery-scroll-lock/dist/jquery-scrollLock.min.js', 'public/assets/libs/jquery-scroll-lock/dist/jquery-scrollLock.min.js')
    .copy('node_modules/imagesloaded/imagesloaded.pkgd.min.js', 'public/assets/libs/imagesloaded/imagesloaded.pkgd.min.js')
    .copy('node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js', 'public/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.js')
    .copy('node_modules/@fortawesome/fontawesome-free/css/all.min.css', 'public/assets/libs/@fortawesome/fontawesome-free/css/all.min.css')
    .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/assets/libs/@fortawesome/fontawesome-free/webfonts')
    .copy('node_modules/swiper/dist/js/swiper.min.js', 'public/assets/libs/swiper/dist/js/swiper.min.js')
    .copy('node_modules/swiper/dist/css/swiper.min.css', 'public/assets/libs/swiper/dist/css/swiper.min.css')
    .combine([
        'public/assets/libs/jquery/dist/jquery.min.js',
        'public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js',
        'public/assets/libs/in-view/dist/in-view.min.js',
        'public/assets/libs/sticky-kit/dist/sticky-kit.min.js',
        'public/assets/libs/svg-injector/dist/svg-injector.min.js',
        'public/assets/libs/jquery.scrollbar/jquery.scrollbar.min.js',
        'public/assets/libs/jquery-scroll-lock/dist/jquery-scrollLock.min.js',
        'public/assets/libs/imagesloaded/imagesloaded.pkgd.min.js',
        'public/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.js',
        'public/assets/libs/swiper/dist/js/swiper.min.js',
    ], 'public/js/purpose.core.js')
    .combine([
        'resources/js/purpose/license.js',
        'resources/js/purpose/layout.js',
        'resources/js/purpose/init/*.js',
        'resources/js/purpose/custom/*.js',
        'resources/js/purpose/maps/*.js',
        'resources/js/purpose/libs/*.js',
        'resources/js/purpose/charts/*.js'
    ], 'public/js/purpose.js')
    .version()
    .webpackConfig({
        resolve: {
            modules: [
                path.resolve(__dirname, 'vendor/laravel/spark-aurelius/resources/assets/js'),
                'node_modules'
            ],
            alias: {
                'vue$': mix.inProduction() ? 'vue/dist/vue.min' : 'vue/dist/vue.js'
            }
        }
    });


// Options

mix.options({
    processCssUrls: false
});


// Live reload

// mix.browserSync({
//     browser: 'Google Chrome',
//     proxy: false,
//     server: {
//         baseDir: './',
//     },
//     files: [
//         '**/*.html',
//         '**/*.js',
//         '**/*.css'
//     ]
// });


// Production settings

if (mix.inProduction()) {

}
