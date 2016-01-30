/*
 *    Steps
 * 1. Rename your gulpfile.js to gulpfile.babel.js
 * 2. Add babel to your package.json (npm install -D babel)
 * 3. Start writing ES6 in your gulpfile!
 */

import gulp from 'gulp'; // ES6 imports!
import sass from 'gulp-sass';

const sassOpts = {
  outputStyle: 'compressed',
  errLogToConsole: true
}; // "let" and "const"!!

gulp.task('sass', () => { // Arrow functions!!
  gulp.src('./**/*.scss')
    .pipe(sass(sassOpts))
    .pipe(gulp.dest('./'));
});

gulp.task('default', ['sass'], () => { // Arrow functions!!
  gulp.watch('./src/sass/**/*.scss', ['sass'])
    .on('change', (e) => { // Arrow functions!!
      console.log(`File ${e.path} was ${e.type}, running Sass task...`); // Template strings and interpolation!!
    });
});
