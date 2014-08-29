<?php
/**
 * Template Name: Contact
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class="body">
	<article class="about">
		<h4 class="font-h-small">About</h4>
		<p>Hello. I'm a graphic designer with a strong focus on user experience and front-end development. Born and raised in Seattle I spend my free time geeking out over technology, playing European board games, and learning new things.</p>
	</article>
	<article class="skills">
		<h4 class="font-h-small">What I can do</h4>
	</article>
	<article class="contact-info">
		<h4 class="font-h-small">Contact</h4>
		<p>I'm currently available for full time positions, internship, or contract work.</p>
		<p class="emailme">Email me at <a href="mailto:rileyhollobaugh@gmail.com">rileyhollobaugh@gmail.com</a></p>
		<p class="social"><a class="social" href="https://twitter.com/HollobaughR" target="_blank" >Twitter</a> /<a href="https://linkedin.com/pub/riley-hollobaugh/65/62a/222/" class="social" target="_blank">Linkedin</a>/<a href="http://instagram.com/rhwells" class="social" target="_blank">Instagram</a></p>
	</article>
</section>
<!-- <article class="profile-img">
		<figure>
	 		<?php 
				$image = get_field('profile_img');
				$atts = array(
						'imageid' => $image, 
						'size1' => '0', 
						'size2' =>'650', 
						'size3' =>'1000'
				);  
				echo tevkori_responsive_shortcode($atts) ; ?>              
		</figure>
	</article> -->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>