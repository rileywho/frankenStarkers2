<header>	
	<div>
		<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
		<h3><?php bloginfo( 'description' ); ?></h3>
	</div>
	<nav id="access" class="nav-collapse" role="navigation">
		<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<a href="#content" style="display:none;" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a>
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #access .nav-collapse -->
</header>