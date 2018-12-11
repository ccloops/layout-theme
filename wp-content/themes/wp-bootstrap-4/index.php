<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>









<?php if(is_page('Home')){ ?>
	<?php include 'ffa-pages/home-page-template.php'; ?>
<?php }else{ ?>
	<?php include 'previous-index-markup.php'; ?>
<?php } ?>





<?php
get_footer();
