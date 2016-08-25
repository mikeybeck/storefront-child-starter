# Storefront Child Theme

The StoreFront Child Theme is a starter blank-ish child theme for WooThemes StoreFront WooCommerce theme with Bootstrap 3.3.6.

## Notes:
- Sidebars removed by default, except on 'page with sidebar' template.  The width of this template needs to be fixed in the CSS as it currently pushes the sidebar down; I haven't got round to this yet.
- The search bar is removed from the header.
- I have included a 'default' CSS file which fixes many things that annoy me in the storefront theme.  The colour of the buttons is set in here so be sure to change that if you don't want them to be red.
- I have included some CSS in the main stylesheet which changes things round a bit; you may wish to delete it all if it doesn't suit.
- Some plugins that I find useful are requested to be installed by default.  This can be disabled by commenting out this line in functions.php: `require_once dirname( __FILE__ )."/TGM/install-plugins.php";`

## Installation

1. Download the child theme from its GitHub Repository [Download StoreFront Blank Child Theme](https://github.com/mikeybeck/storefront-child-starter).
2. Goto WordPress > Appearance > Themes > Add New.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

## Usage

This child theme is designed to be used as a starter theme for the WooCommerce StoreFront theme which you can download for free below.

* [Download WooCommerce StoreFront Theme](https://wordpress.org/themes/storefront/)
* [StoreFront Documentation](http://docs.woothemes.com/documentation/themes/storefront/)
* [StoreFront Child Themes](http://www.woothemes.com/product-category/themes/storefront-child-theme-themes/)
* [StoreFront Extensions](http://www.woothemes.com/product-category/storefront-extensions/)

Custom PHP that you write should be added to the child themes functions.php file whilst any custom CSS should be added to the child themes style.css file.

There is also a style.scss file within the /assets/sass/ folder that can be used if you wish to write [SASS - Syntactically Awesome Style Sheets](http://sass-lang.com/) based styles which can then be compiled into the style.css file using an app like [CodeKit](https://incident57.com/codekit/) for OSX or [PrePros](https://prepros.io/) for Windows.

The blank child theme itself has just a little bit of functionality.  If you would like to learn more about child themes for WordPress see the documentation below.

* [WordPress Child Themes](https://codex.wordpress.org/Child_Themes)


Thanks to stuartduff (https://github.com/stuartduff/storefront-child-theme) for getting this started and anakite (https://github.com/anakite/storefront-child-theme) for adding Bootstrap!