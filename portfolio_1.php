<?php
/*
Single Post Template: Portfolio-1
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
	<section>
		<article class="project">
			<h1>Secure </h1>
			<p><?php the_field('description'); ?></p>
		</article>
	</section>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<article>

	
	</article>
	<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>