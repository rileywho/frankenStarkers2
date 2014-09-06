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
	<section class="pr-intro">
		<article class="pr-description">
			<h4 class="font-h-small">Project Overview</h4>
			<p><?php the_field('description'); ?></p>
		</article>
		<article class="pr-client">
			<h4 class="font-h-small">Client</h4>
			<p>School Project</p>
		</article>
		<article class="pr-details">
			<h4 class="font-h-small">Responsibilities</h4>
			<p><?php the_field('responsibilities');?></p>
		</article>
		<?php if( get_field('team') ): ?>
		<article class="pr-team">
			<h4 class="font-h-small">Team</h4>
			<?php the_field('team'); ?>
		</article>
		<?php endif;?>
	</section>

	<!-- <section class="body">
		<article class="pr-details">
			<h4 class="font-h-small">Responsibilities</h4>
			<p><?php the_field('responsibilities');?></p>
			<?php if( get_field('team') ): ?>
				<h4 class="font-h-small">Team</h4>
				<?php the_field('team'); ?>
			<?php endif;?>
		</article>
	</section> --> 

<?php if( get_field('problem_header') ): ?>
	<section class="pr-problem" style="background-color:<?php the_field('problem_color');?>; color: #000;">
		<div>
			<article>
				<h4><?php the_field('problem_header'); ?></h4>
				<p><?php the_field('problem_content'); ?></p>
				<p class="font_small"><?php the_field('credit'); ?></p>
			</article>
		</div>
	</section>
	<?php endif; ?>

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