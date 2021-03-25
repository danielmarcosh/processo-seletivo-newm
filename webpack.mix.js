const mix = require("laravel-mix");

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

mix.sass("resources/scss/app.scss", "public/site/style.css")
    .copy(
        "node_modules/datatables.net-dt/css/jquery.dataTables.min.css",
        "public/site/dataTables.css"
    )

    .scripts("node_modules/jquery/dist/jquery.min.js", "public/site/jquery.js")
    .scripts(
        "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js",
        "public/site/bootstrap.js"
    )
    .scripts(
        "node_modules/datatables.net/js/jquery.dataTables.min.js",
        "public/site/dataTables.js"
    );
