
<section class="pr-header" style="background-color:<?php the_field('header_color');?>">
			<article class="pr-header-img">
				<?php if( get_field('header_img') ): ?>
				<img class="max-img" src="<?php the_field('header_img'); ?>" />
			<?php endif; ?>
			</article>
		</section>
	<?php endif; ?>
	<h1>This is a title</h1>