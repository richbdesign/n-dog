<?php
/**
 * @package WordPress
 */

get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

<?php
if (get_field('intro_text', 10)) {
	echo '<section class="pagebanner">';
	echo '<div class="grid grid-pad">';
	echo '<div class="col-1-1">';
	echo ''. get_field('intro_text', 10) .'';
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
		<div class="col-1-1">
			<h2 class="search-title"><?php printf( __( 'Music Results for: %s', 'naughtydog' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
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
		
		<?php endwhile; ?>
		<?php else : ?>
			
			<div class="col-1-1">
				<h3 class="entry-title"><?php _e( 'Nothing Found', 'naughtydog' ); ?></h2>
				 <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'naughtydog' ); ?></p>
			</div>
			
		<?php endif; ?>
	
	</div>
</section><!-- main -->

<?php get_footer(); ?>