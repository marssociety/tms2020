# tms2020 Readme File
# Author: James Burk <jburk@marssociety.org>
This is the new custom theme for The Mars Society's news design & style guidelines created in 2019, built for Wordpress.
It is based on the Basic Child Theme for UnderStrap Theme Framework: https://github.com/understrap/understrap

## How it works
This is a child theme of Understrap, which means it shares with the parent theme all PHP files and adds its own functions.php on top of the UnderStrap parent theme's functions.php.

**IT DOES NOT LOAD THE PARENT THEMES CSS FILE(S)!** Instead it uses the UnderStrap Parent Theme as a dependency via npm and compiles its own CSS file from it.

Understrap Child Theme uses the Enqueue method to load and sort the CSS file the right way instead of the old @import method.

## Installation
1. Install the parent theme UnderStrap first: `https://github.com/understrap/understrap`
   - IMPORTANT: If you download UnderStrap from GitHub make sure you rename the "understrap-master.zip" file to "understrap.zip" or you might have problems using this child theme!
1. Upload the tms2020 folder to your wp-content/themes directory
1. Go into your WP admin backend 
1. Go to "Appearance -> Themes"
1. Activate the tms2020 theme

## Editing
Our CSS styles live in:
`/sass/theme/_tms2020.scss`
To overwrite Bootstrap's or UnderStrap's base variables just add your own value to:
`/sass/theme/_tms2020_variables.scss`

Using gulp, it will be outputted into:
`/css/tms2020.min.css` and `/css/tms2020.css`

So we have one clean CSS file at the end and just one request.

## Developing With NPM, Gulp, SASS and Browser Sync

### Installing Dependencies
- Make sure you have installed Node.js, Yarn, Gulp, and Browser-Sync [1] on your computer globally
- Open your terminal and browse to the location of your UnderStrap copy
- Run: `$ yarn install` then: `$ gulp copy-assets`

### Running
To work and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpconfig.json` in the beginning of the file:
```javascript
  "browserSyncOptions" : {
    "proxy": "localhost/wordpress/",
    "notify": false
  }
};
```
- then run: `$ gulp watch-bs`

[1] Visit [https://browsersync.io/](https://browsersync.io/) for more information on Browser Sync