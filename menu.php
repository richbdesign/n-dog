<?php 
/**
 * @package WordPress
 */
?>

<header>
	<div class="grid grid-pad">
		<div class="col-2-12">
			<a href="<?php echo home_url();?>" title="<?php echo get_bloginfo('name');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Header-Logo.png" alt="<?php echo get_bloginfo('name');?>" class="logo retina"/></a>
		</div>
		<div class="col-10-12">
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
		</div>
	</div>
</header><!-- header -->