<?php
/**
 * @package WordPress
 */

get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

<section class="banner intbanner">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<h1>Error 404</h1>
		</div>
	</div>
</section><!-- banner -->
<section class="main">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'freedomadvisory' ); ?></h2>
			<p>It seems we can't find what you're looking for. Try heading back to the <a href="/" title="home page">home page</a>.</p>
		</div>
	</div>
</section><!-- main -->
<section class="promo">
	<div class="grid grid-pad">
		<div class="col-1-1">
		
			<?php wp_reset_query(); ?>
			<?php
			$taglines = new WP_Query(array('post_type' => 'tagline', 'posts_per_page' => 1, 'orderby' => 'rand'));
			while ($taglines->have_posts()) : $taglines->the_post();
			?>
			
				<?php the_content(); ?>
			
			<?php endwhile; // end of tagline loop. ?>
			<?php wp_reset_query(); ?>
				
		</div>
	</div>
</section>

<?php get_footer(); ?>