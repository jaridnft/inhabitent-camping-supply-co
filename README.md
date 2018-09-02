# 'Inhabitent Camping Supply Co.' powered by WordPress.

#### Author: Jarid Warren [ <jaridwarren@gmail.com> ]

Custom WordPress theme for the fictional 'Inhabitent Camping Supply Co." complete with search, custom post types, archives, single post views, contact form and widgetized sidebar. This website is a fixed-width desktop version.

<img src="/themes/inhabitent-theme/assets/images/home-demo.gif" width="425"><img src="/themes/inhabitent-theme/assets/images/grid-demo.gif" width="425">

## Motivation

This was my first attempt at building a completely custom WordPress theme. This site takes advantage of WordPress' built-in back-end capabilities to make a completely dynamic site using PHP and the WordPress template hierarchy. In addition, the front page and 'Shop' page were used to practice CSS grid.

## Technology

- JavaScript ES6 / jQuery
- WordPress / PHP
- NPM / Gulp
- HTML5 / CSS3

## Setup

**Install WordPress:**

- [Download Wordpress](https://wordpress.org/latest.zip) and place directory at root of server (you'll need a tool like [MAMP](https://www.mamp.info/en/) if you wish to host locally)
- Replace `themes`, `plugins` and `uploads` folders from install with ones in this repo

**Initialize NPM:**

`> npm init`

**Install Gulp:**

`> npm install`

**Convert Sass files to CSS:**

`> gulp sass`

**Call Babel & Uglify on JS files:**

`> gulp scripts`

**Launch Browser-Sync to automatically update changes:**

`> gulp browser-sync`

**Watch changes to Sass/JS and automatically run scripts/sass:**

`> gulp watch` or `gulp`

## @TODO

- Widget-ize footer
- Validate HTML on all pages (only did front-page.php)
- Make entire website mobile responsive (desktop only at the moment)
