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
 ?><?php echo get_header(); ?><div class="homepage-banner"><div class="homepage-banner-text"><h1>Your new favorite tapas bar.</h1><h2>In the heart of Barcelona.</h2></div></div><div class="primary-content"><header><h1><?php echo get_template_part('inc/templates/title'); ?></h1><?php if (have_posts()) :
  while (have_posts()) : the_post(); ?><article><?php echo get_template_part('content', get_post_format()); ?></article><?php endwhile; ?><?php echo brunch_paging_nav(); ?><?php else : ?><?php echo get_template_part('content', 'none'); ?><?php endif; ?></header></div><?php echo get_sidebar(); ?><?php echo get_footer(); ?>