<?php
/**
 * Template Name: Podcast Page
 * Description: Podcast page template
 *
 * @package WordPress
 */

get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

<?php the_post(); ?>

<section class="podcastbanner">
</section><!-- podcastbanner -->
<section class="main mainbg">
	<div class="grid grid-pad">
		<div class="col-1-1">
		
			<?php wp_reset_query(); ?>
			<?php
			$podloop = new WP_Query(array('post_type' => 'podcast', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => -1));
			while ($podloop->have_posts()) : $podloop->the_post();
			?>
			
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
	    <?php wp_reset_query(); ?>
	    
		</div>
	</div>
</section><!-- main -->

<?php get_footer(); ?>