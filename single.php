<?php
/**
 * @package WordPress
 */
 
get_header();  //the Header
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

<section class="main mainbg nobottom">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<?php while ( have_posts() ) : the_post(); ?> <!--  the Loop -->
		
				<article <?php post_class(); ?>>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<p class="meta"><?php echo get_the_date(); ?></p>
					<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('full', array('class' => 'blogpic'));
					} 
					?>
					<div class="entry">
						<?php the_content(); ?>
					</div>
				</article>
			
			<?php endwhile; ?>
			
		</div>
	</div>
</section>

<?php get_footer(); //the Footer ?>