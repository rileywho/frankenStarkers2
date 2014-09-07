<?php
/*
Single Post Template: Portfolio-2
Description: This part is optional, but helpful for describing the Post Template
*/	
?>
<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
	
	<?php get_template_part( '/parts/custom/intro'); ?>
	<?php get_template_part( '/parts/custom/about-project'); ?>
	<?php get_template_part( '/parts/custom/problem'); ?>

<!-- 	<section>
		<article class="pr-header-img">
			<?php if( get_field('img_1') ): ?>
			<img src="<?php the_field('img_1'); ?>" />
		<?php endif; ?>
		</article>
	</section> -->
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<article class="pr2-content">
	<?php the_content(); ?>
	
	</article>
	<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>