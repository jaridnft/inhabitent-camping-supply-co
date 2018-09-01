let gulp = require('gulp'),
  uglify = require('gulp-uglify'),
  rename = require('gulp-rename'),
  browserSync = require('browser-sync').create(),
  eslint = require('gulp-eslint'),
  sass = require('gulp-sass'),
  babel = require('gulp-babel'),
  autoPrefixer = require('gulp-autoprefixer'),
  cssNano = require('gulp-cssnano'),
  imageMin = require('gulp-imagemin'),
  prettyError = require('gulp-prettyerror');

const basePath = 'themes/inhabitent-theme/';

gulp.task('sass', () => {
  return gulp
    .src(`${basePath}src/scss/style.scss`)
    .pipe(prettyError())
    .pipe(sass())
    .pipe(
      autoPrefixer({
        browsers: ['last 2 versions']
      })
    )
    .pipe(gulp.dest(`${basePath}build/css/`))
    .pipe(cssNano())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest(`${basePath}build/css`));
});

gulp.task('lint', () => {
  return (
    gulp
      .src(`${basePath}src/js/*.js`)
      // eslint() attaches the lint output to the "eslint" property
      // of the file object so it can be used by other modules.
      .pipe(eslint())
      // eslint.format() outputs the lint results to the console.
      // Alternatively use eslint.formatEach() (see Docs).
      .pipe(eslint.format())
      // To have the process exit with an error code (1) on
      // lint error, return the stream and pipe to failAfterError last.
      .pipe(eslint.failAfterError())
  );
});

gulp.task(
  'scripts',
  gulp.series('lint', () => {
    return gulp
      .src(`${basePath}src/js/*.js`) // these are the files gulp will consume
      .pipe(babel()) // transcompile ES6 to ES5
      .pipe(uglify()) // call uglify function on these files
      .pipe(
        rename({
          extname: '.min.js'
        })
      ) // change file extension after uglified
      .pipe(gulp.dest(`${basePath}build/js`)); // send built files to ./build/js/
  })
);

gulp.task('images', () => {
  return gulp
    .src(`${basePath}assets/images/**/*.{png,jpg,jpeg,svg}`)
    .pipe(
      imageMin([
        imageMin.jpegtran({ progressive: true }),
        imageMin.optipng({ optimizationLevel: 5 }),
        imageMin.svgo({
          plugins: [{ removeViewBox: true }, { cleanupIDs: false }]
        })
      ])
    )
    .pipe(gulp.dest(`${basePath}build/images`));
});

gulp.task('watch', () => {
  // pass in files that need to be uglified
  gulp.watch(`${basePath}src/js/*.js`, gulp.series('scripts'));
  gulp.watch(`${basePath}src/scss/*.scss`, gulp.series('sass'));
});

gulp.task('browser-sync', function() {
  const files = [
    `${basePath}build/css/*.css`,
    `${basePath}build/js/*.js`,
    `${basePath}*.php`,
    `${basePath}**/*.php`
  ];

  browserSync.init(files, {
    proxy: 'localhost:8888/inhabitent'
  });

  gulp.watch(files).on('change', browserSync.reload);
});

gulp.task('default', gulp.series('watch'));
//to turn on browser sync as well use:
//gulp.task("default", gulp.parallel("browser-sync", "watch"));
