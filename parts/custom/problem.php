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