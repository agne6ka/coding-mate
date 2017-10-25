/**
 * Commands:
 * dev        : runs webpack for development
 * - Supports any webpack options (e.g. --watch)
 * dev-server : runs webpack-dev-server
 * - --host The hostname/ip address the webpack-dev-server will bind to
 * - --port The port the webpack-dev-server will bind to
 * - --hot  Enable HMR on webpack-dev-server
 * - --keep-public-path Do not change the public path (it is usually prefixed by the dev server URL)
 * - Supports any webpack-dev-server options
 * production : runs webpack for production
 * - Supports any webpack options (e.g. --watch)
 * ./node_modules/.bin/encore dev --watch
 * ./node_modules/.bin/encore dev-server
 * ./node_modules/.bin/encore production
**/

var Encore = require('@symfony/webpack-encore');

Encore
// directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // what's the public path to this directory (relative to your project's document root dir)
    .setPublicPath('/build')

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // will output as web/build/app.js
    .addEntry('scripts', './assets/js/main.js')

    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()

    // will output as web/build/global.css
    .addStyleEntry('styles', './assets/scss/main.scss')

    // allow sass/scss files to be processed
    .enableSassLoader()

    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()

    .enableSourceMaps(!Encore.isProduction())

// create hashed filenames (e.g. app.abc123.css)
//     .enableVersioning()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();