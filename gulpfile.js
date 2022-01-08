const { watch, series, parallel } = require("gulp");
const browserSync = require("browser-sync").create();

// Конфигурация
const path = require("./config/path.js");
const app = require('./config/app.js');

// Задачи
const clear = require("./task/clear.js");
const html = require("./task/html.js");
const php = require("./task/php.js");
const scss = require("./task/scss.js");
const js = require("./task/js.js");
const img = require("./task/img.js");
const font = require("./task/font.js");


// Статический сервер
const server = () => {
  browserSync.init({
    proxy: 'http://xshockey/',
    host: 'xshockey',
    open: 'external',
    ws: true
  });
}

// Отслеживание изменений
const watcher = () => {
  watch(path.html.watch, html).on('all', browserSync.reload);
  watch(path.php.watch, php).on('all', browserSync.reload);
  watch(path.scss.watch, scss).on('all', browserSync.reload);
  watch(path.js.watch, js).on('all', browserSync.reload);
  watch(path.img.watch, img).on('all', browserSync.reload);
  watch(path.font.watch, font).on('all', browserSync.reload);
}


const build = series(
  clear,
  parallel(html, php, scss, js, img, font)
);

const dev = series(
  build,
  parallel(server, watcher)
);

// Публичные задачи
exports.html = html;
exports.php = php;
exports.scss = scss;
exports.js = js;
exports.img = img;
exports.font = font;

// Сборка
exports.default = app.isProd
  ? build
  : dev;
