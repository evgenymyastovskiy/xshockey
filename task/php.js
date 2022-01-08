const { src, dest } = require("gulp");

// Конфигурация
const path = require('../config/path.js');
const app = require("../config/app.js");

// Плагины
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const fileInclude = require("gulp-file-include");
const size = require("gulp-size");
const webpHtml = require('gulp-webp-html');


// Обработка PHP
const php = () => {
  return src(path.php.src)
    .pipe(plumber({
      errorHandler: notify.onError(error => ({
        title: 'php',
        message: error.message
      }))
    }))
    .pipe(fileInclude())
    .pipe(webpHtml())
    .pipe(dest(path.php.dest));
}

module.exports = php;