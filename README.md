Gitable Wordpress
#

Gitable Wordpress is for quick bootstrapping a version controlled wordpress installation.

Installation
##
1. clone Gitable Wordpress
2. `git submodule update wordpress`
3. go throuh installation
4. edit `$base_path` in `wp_gitable-php` corresponding to your serve config (usually '/' if working from root)
5. add `require_once('wp-gitable.php')` to top your `wp-config.php`
6. work in `wp-contents` folder as used to

wordpress is now separately versioned in `wordpress folder`


