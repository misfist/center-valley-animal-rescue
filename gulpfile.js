// npm install --save-dev gulp gulp-plumber gulp-watch gulp-livereload gulp-minify-css gulp-jshint jshint-stylish gulp-uglify gulp-rename gulp-notify gulp-include gulp-sass

var gulp = require('gulp'),
    plumber = require( 'gulp-plumber' ),
    watch = require( 'gulp-watch' ),
    livereload = require( 'gulp-livereload' ),
    minifycss = require( 'gulp-cssnano' ),
    uglify = require( 'gulp-uglify' ),
    rename = require( 'gulp-rename' ),
    notify = require( 'gulp-notify' ),
    include = require( 'gulp-include' ),
    sass = require( 'gulp-sass' ),
    imagemin = require( 'gulp-imagemin' );

var onError = function( err ) {
    console.log( 'An error occurred:', err.message );
    this.emit( 'end' );
}

var paths = {
    /* Source paths */
    styles: ['./assets/sass/style.scss'],
    scripts: [
        './assets/js/**.js'
    ],
    images: ['./assets/images/**/*'],

    /* Output paths */
    stylesOutput: './assets/css',
    scriptsOutput: './assets/js',
    imagesOutput: './assets/images',
};

gulp.task( 'sass', function() {
    return gulp.src( paths.styles, {
        style: 'expanded'
    } )
    .pipe( plumber( { errorHandler: onError } ) )
    .pipe( sass() )
    .pipe( gulp.dest( './' ) )
    .pipe( minifycss() )
    .pipe( rename( { suffix: '.min' } ) )
    .pipe( gulp.dest( paths.stylesOutput ) )
    .pipe( notify( { message: 'Styles task complete' } ) )
    .pipe( livereload() );
} );

gulp.task('scripts', function() {
  return gulp.src( paths.scripts )
    .pipe( gulp.dest( paths.scriptsOutput ) )
    .pipe( rename( { suffix: '.min' } ) )
    .pipe( uglify() )
    .pipe( gulp.dest( paths.scriptsOutput ) )
    .pipe( notify( { message: 'Scripts task complete' } ) )
    .pipe( livereload() );
});


gulp.task( 'watch', function() {
    livereload.listen();
    gulp.watch( './assets/sass/**/*.scss', [ 'sass' ] );
    //gulp.watch( './assets/js/**/*.js', [ 'scripts' ] );
    gulp.watch( './**/*.php' ).on( 'change', function( file ) {
        livereload.changed( file );
    } );
} );

gulp.task( 'default', [ 'sass', 'watch' ], function() {

} )
