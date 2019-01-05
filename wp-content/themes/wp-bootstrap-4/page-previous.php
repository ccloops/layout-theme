<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>



<?php include 'ffa-pages/flexible-content.php'; ?>




<?php if(is_page('Home')){ ?>
	<?php include 'ffa-pages/home.php'; ?>

<?php } else if (is_page('Get Involved')) { ?>

		<?php include 'ffa-pages/get-involved.php'; ?>

<?php } else if (is_page('Accelerator')) { ?>
		<?php include 'ffa-pages/accelerator.php'; ?>
<?php } else if (is_page('Events')) { ?>
		<?php include 'ffa-pages/events.php'; ?>

<?php } else if (is_page('About Us')) { ?>
	<?php include 'ffa-pages/about.php'; ?>
<?php } else if (is_page('Blog')) { ?>
	<?php include 'ffa-pages/blog.php'; ?>

<?php }else{ ?>
	<?php include 'previous-index-markup.php'; ?>
<?php } ?>



<?php
get_footer();
