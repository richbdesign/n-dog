<?php
/**
 * @package WordPress
 */
 
get_header();  //the Header
get_template_part( 'menu', 'index' ); //the  menu + logo/site title
?>

<section class="podcastbanner">
</section><!-- podcastbanner -->
<section class="main mainbg">
	<div class="grid grid-pad">
		<div class="col-1-1">
		
			<?php while ( have_posts() ) : the_post(); ?> <!--  the Loop -->
			
			<div class="podcastitem">
				<div class="podleft">
					<?php the_post_thumbnail('podcastpic', array('class' => 'podcastpic')); ?>
					<?php 
						//$podcasttrack = get_field('podcast_file');
						//$podcasttrackurl = $podcasttrack[url];
					?>
					<?php $podcasttrack = get_field('podcast_file');
						if (!empty($podcasttrack)):
						$podcasttrackurl = $podcasttrack[url];
						echo do_shortcode('[sc_embed_player fileurl="'.$podcasttrackurl.'"]');
						?>
					<?php endif; ?>
					<?php //echo do_shortcode('[sc_embed_player fileurl="'.$podcasttrackurl.'"]'); ?>
					<a href="<?php the_field('podcast_link'); ?>" title="Open in iTunes" class="podcastlink">Open in iTunes</a>
					<div class="clear"></div>
					<ul class="artistsocial">
						<li class="share">SHARE:</li>
						<li class="twitter"><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="Twitter" class="newwindow" name="windowX">Twitter</a></li>
						<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Facebook" class="newwindow" name="windowX">Facebook</a></li>
					</ul>
				</div>
				<div class="podright">
					<h2><?php the_title(); ?></h2>
					<p class="meta"><?php echo get_the_date(); ?></p>
					<?php the_content(); ?>
				</div>
				<div class="clear"></div>
			</div>
		
		<?php endwhile; // end of podcast loop. ?>
		
		<?php /* Display navigation to next/previous pages when applicable */ ?>
			
		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		
		  <!-- Begin Pagination -->
		  <?php if (function_exists("emm_paginate")) {
		      emm_paginate();
		  } ?>	        	
		  
		<?php endif; ?>
	    
		</div>
	</div>
</section><!-- main -->

<?php get_footer(); //the Footer ?>