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