<?php
/**
 * WordPress-Theme-Canvas
 * A Starter WordPress Theme for Developers who wish to develop a WordPress theme from scratch.
 *
 * @package WordPress
 * @subpackage WPCanvas
 *
 * @file page.php
 * The page template. Used when an individual Page is queried.  
 */
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>
			
		</div> <!--/.post-->

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>