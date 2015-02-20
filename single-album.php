<?php
/**
 * @package WordPress
 */
 
get_header();  //the Header
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php $pageslug = the_slug(); ?>

<section class="main">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<h1 class="page-title"><?php $terms_as_text = get_the_term_list( $post->ID, 'artists', '', ', ', '' ) ; echo strip_tags($terms_as_text); ?></h1>
			<h2 class="album-title"><?php the_title(); ?></h2>
		</div>
		<div class="col-6-12">
			<?php the_post_thumbnail('releasebig', array('class' => 'releasebig')); ?>
			<div class="tracklist">
				<p style="text-transform: uppercase;"><strong>Tracklist</strong></p>
				<?php the_field('track_list'); ?>
				<?php
				$ituneslink = get_field('itunes_link'); 
					if (!empty($ituneslink)):
				       	echo '<a href="'.$ituneslink.'" title="Buy in iTunes" target="_blank" class="itunesbtn">Buy in iTunes</a>'; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-6-12">
			<?php the_content(); ?>
			<ul class="artistsocial">
				<li class="share">SHARE:</li>
				<li class="twitter"><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="Twitter" class="newwindow" name="windowX">Twitter</a></li>
				<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Facebook" class="newwindow" name="windowX">Facebook</a></li>
			</ul>
		</div>
	</div>
</section>

<?php endwhile; ?>

<?php get_footer(); //the Footer ?>