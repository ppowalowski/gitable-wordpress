# Gitable Wordpress

Gitable Wordpress is for quick bootstrapping a version controlled wordpress installation.

## Installation

1. Clone Gitable Wordpress
2. `$ git submodule update --init`
3. Go through installation
4. Edit `$base_path` in `wp_gitable.php` corresponding to your serve config (usually '/' if working from root)
6. Add `require_once('wp-gitable.php')` to the top of your `wp-config.php`
7. Work in `wp-contents` folder as you are used to

Wordpress is separately versioned in `wordpress/`, updating Wordpress becomes as simple as typing `$ git pull origin` inside the `wordpress` folder.
