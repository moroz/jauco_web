<?php
/*
 * This file is part of the hyyan/brunch-wordpress-theme package.
 * (c) Hyyan Abo Fakher <hyyanaf@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!defined('ABSPATH')) {
    exit('restricted access');
}
?>

<footer class="site-footer">
    <?php get_sidebar('footer'); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
