Gitable Wordpress
#

Gitable Wordpress is for quick bootstrapping a version controlled wordpress installation.

Installation
##
1. clone Gitable Wordpress
2. `$git submodule init`
3. `$git submodule update`
4. go throuh installation
5. edit `$base_path` in `wp_gitable-php` corresponding to your serve config (usually '/' if working from root)
6. add `require_once('wp-gitable.php')` to top your `wp-config.php`
7. work in `wp-contents` folder as used to

wordpress is now separately versioned in `wordpress folder`, updating wordpress becomes as simple as typing `$ git pull origin` inside wordpress folder


