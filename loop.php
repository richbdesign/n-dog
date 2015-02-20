<?php 
/**
 * @package WordPress
 */
?>

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
						<ul class="artistsocial">
							<li class="share">SHARE:</li>
							<li class="twitter"><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="Twitter" class="newwindow" name="windowX">Twitter</a></li>
							<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Facebook" class="newwindow" name="windowX">Facebook</a></li>
						</ul>
					</div>
				</article>
			
			<?php endwhile; ?>
			
			<?php /* Display navigation to next/previous pages when applicable */ ?>
			
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
			
			  <!-- Begin Pagination -->
			  <?php if (function_exists("emm_paginate")) {
			      emm_paginate();
			  } ?>	        	
			  
			<?php endif; ?>
		</div>
	</div>
</section>