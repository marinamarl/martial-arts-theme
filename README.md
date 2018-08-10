Martial Arts Theme
======================

Contributors: automattic
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready


A starter theme called Martial Arts.

### Requirements

- [Node.js](http://nodejs.org/download/)
- [Gulp](https://gulpjs.com/)
- [npm](https://www.npmjs.com/)

Requires at least: 4.5
Tested up to: 4.8
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE

### Uses

- [Gulp](https://gulpjs.com/) for building Sass styles and uglifying javascript files (every task is explained in comments in the gulpfile.js).
- [BrowserSync](https://browsersync.io/) for injecting css, reloading and opening browser automatically.

Martial Arts includes support for Infinite Scroll in Jetpack.

Installation
------------
* Configure the gulpfile's project variables.

```bash
$ npm install
```
Any vendor package installed with npm must be declared in gruntfile.js

Developing
------------

Watch the change of .scss files and build the .css
Reload on PHP / Scss / vendorJs / customJs file changes.

```bash
$ gulp
```

Compile assets
------------

Compiles Sass, Autoprefixes it and Minifies CSS.

```bash
$ styles
```
* Based on Underscores https://underscores.me/, (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
