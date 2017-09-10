# easy-navigation
Easy Navigation is a fully styled and functional desktop and mobile navigation to include in custom theme development. Easily update the colors via CSS or SCSS and get on with your theme development.

## Quick Setup
1. Download or clone the easy-navigation repository into your theme's root folder.
2. Add `require get_template_directory() . '/easy-navigation/site-header-functions.php';` to your theme's functions.php file.
3. Place `<?php get_template_part('easy-navigation/site-header'); ?>` where you want your Easy Navigation header to show up.

## Features
* Support for `the_custom_logo()`.
* Support for separate primary and mobile menu locations.
* Call attention to certain links using `.nv-callout` class.
* Make any link activate the dropdown search bar using the class `.js-open-site-search`.
* Remove the hover underline from any link using the class `.nv-no-underline`.

## Pro Tips
* Grab a gradient from [Grabient](https://grabient.com) for the navigation background.
