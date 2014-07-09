<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
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
	<article class="intro">
		<p>Graphic designer with a strong focus on user experience and front-end development.</p>
	</article>
</section>
<section id="root">
	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : the_post(); ?>
				<article class="work-links">
					<a href="<?php the_permalink(); ?>">
						<div class="cover"><p><?php the_field('title'); ?></p></div>
						<figure>
	 						<?php 
						  $image = get_field('home_img');
						  $atts = array(
						    'imageid' => $image, 
						    'size1' => '0', 
						    'size2' =>'650', 
						    'size3' =>'1000'
						  );  
						  echo tevkori_responsive_shortcode($atts) ; ?>              
						</figure>
					</a>
				</article>
		<?php endwhile; ?>	
		<?php else: ?>
		<h2>No posts to display</h2>
	<?php endif; ?>
	<div id="root_footer"></div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>