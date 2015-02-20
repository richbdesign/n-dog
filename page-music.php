<?php
/**
 * Template Name: Music Page
 * Description: Music page template
 *
 * @package WordPress
 */

get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

<?php the_post(); ?>

<?php
if (get_field('intro_text')) {
	echo '<section class="pagebanner">';
	echo '<div class="grid grid-pad">';
	echo '<div class="col-1-1">';
	echo ''. get_field('intro_text') .'';
	echo '</div>';
	echo '</div>';
	echo '</section>';
}
?><!-- pagebanner -->
<section class="bigsearch">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<p class="searchtext">Search</p>
			<?php get_search_form(); ?>
		</div>
	</div>
</section><!-- big searcher -->
<section class="main musicbg">
	<div class="grid grid-pad">
		<div class="col-1-1 trackheader">
			<div class="tracktitler">
				<div class="col-2-12">
					&nbsp;
				</div>
				<div class="col-2-12">
					<h4>Artist</h4>
				</div>
				<div class="col-3-12">
					<h4>Song</h4>
				</div>
				<div class="col-4-12">
					<h4>Album</h4>
				</div>
			</div>
		</div>
		<?php wp_reset_query(); ?>
		<?php
		$musicloop = new WP_Query(array('post_type' => 'song', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1));
		while ($musicloop->have_posts()) : $musicloop->the_post();
		?>
			<div class="col-1-1">
				<div class="tracklister">
					<div class="col-2-12">
						<?php 
							$musictrack = get_field('song_file');
							$musictrackurl = $musictrack[url];
						?>
						<?php echo do_shortcode('[sc_embed_player fileurl="'.$musictrackurl.'"]'); ?>
					</div>
					<div class="col-2-12">
						<p><a href="<?php the_field('artist_link'); ?>" title="<?php the_field('artist_name'); ?>"><?php the_field('artist_name'); ?></a></p>
					</div>
					<div class="col-3-12">
						<p><?php the_title(); ?></p>
					</div>
					<div class="col-4-12">
						<p><?php the_field('album_name'); ?></p>
					</div>
					<div class="col-1-12">
						<a href="<?php the_field('album_link'); ?>" title="Info" class="infolink">Info</a>
					</div>
				</div>
			</div>
			
	    <?php endwhile; // end of music loop. ?>
	    <?php wp_reset_query(); ?>
	</div>
</section><!-- main -->

<?php get_footer(); ?>