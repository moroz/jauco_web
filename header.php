<?php /*
* This file is part of the hyyan/brunch-wordpress-theme package.
* (c) Hyyan Abo Fakher <hyyanaf@gmail.com>
* 
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

if (!defined('ABSPATH')) {
    exit('restricted access');
}
 ?><!DOCTYPE html><!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]--><head><meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php echo wp_head(); ?><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]--></head><body <?php body_class(); ?>><nav role="navigation" class="navbar navbar-default"><div class="container-fluid"><!-- Brand and toggle get grouped for better mobile display --><div class="navbar-header"><button type="button" data-toggle="collapse" data-target="#primary-navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="<?php echo home_url(); ?>" class="navbar-brand"><?php echo bloginfo('name'); ?></a><?php wp_nav_menu(array(
    'menu' => 'primary_navigation',
    'theme_location' => 'primary_navigation',
    'depth' => 2,
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id' => 'primary-navbar-collapse',
    'menu_class' => 'nav navbar-nav',
    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
    'walker' => new wp_bootstrap_navwalker())
); ?></div></div></nav>