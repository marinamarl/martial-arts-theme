Typical Wordpress Theme
======================

### Requirements

- [Node.js](http://nodejs.org/download/)
- [Gulp](https://gulpjs.com/)
- [npm](https://www.npmjs.com/)

### Uses

- [Gulp](https://gulpjs.com/) for building Sass styles and uglifying javascript files (every task is explained in comments in the gulpfile.js).
- [BrowserSync](https://browsersync.io/) for injecting css, reloading and opening browser automatically.

Installation
------------

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
