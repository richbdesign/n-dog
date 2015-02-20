<?php
/**
 * Template Name: Home Page
 * Description: Home page template
 *
 * @package WordPress
 */

get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

<?php the_post(); ?>
<section class="banner">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<div class="flexslider">
				<ul class="slides">
					<?php
					$homebanners = new WP_Query(array('post_type' => 'banner', 'orderby' => 'rand', 'posts_per_page' => 5 ));
					while ($homebanners->have_posts()) : $homebanners->the_post();
					?>

						<?php $imagelink = get_field('banner_link');
							
							if (!empty($imagelink)):
							echo '<li><a href="'.$imagelink.'">';
							the_post_thumbnail('full', array('class' => 'bannerpic'));
							echo '</a></li>';
							
							else :
							echo '<li>';
							the_post_thumbnail('full', array('class' => 'bannerpic'));
							echo '</li>'; ?>
							
						<?php endif; ?>

					<?php endwhile; // end of banner loop. ?>
					<?php wp_reset_query(); ?>
				</ul>
			</div>
		</div>
	</div>
</section><!-- banner -->
<section class="bigsearch">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<p class="searchtext">Search</p>
			<?php get_search_form(); ?>
		</div>
	</div>
</section><!-- big searcher -->
<section class="main mainbg">
	<div class="grid grid-pad">
		<div class="col-7-12">
			<h3>New Releases</h3>
			<ul class="releases">
				<?php
				$albumreleases = new WP_Query(array('post_type' => 'album', 'posts_per_page' => 3 ));
				while ($albumreleases->have_posts()) : $albumreleases->the_post();
				?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'releasethmb')); ?></a>
			    		<p><?php the_title(); ?><br /><span><?php $terms_as_text = get_the_term_list( $post->ID, 'artists', '', ', ', '' ) ; echo strip_tags($terms_as_text); ?></span></p>
					</li>
					
				<?php endwhile; // end of news loop. ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
		<div class="col-5-12">
			<h3>Latest News</h3>
			<div class="artistnews">
				<?php wp_reset_query(); ?>
				<?php
				$recentposts = new WP_Query(array('orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 3));
				while ($recentposts->have_posts()) : $recentposts->the_post();
				?>
				
					<article <?php post_class(); ?>>
						<p class="meta"><?php echo get_the_date(); ?></p>
						<p><strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></strong></p>
					</article>
					
			    <?php endwhile; // end of recent posts loop. ?>
			    <?php wp_reset_query(); ?>
			    <a href="/news/" title="See more news" class="seemore">See more news</a>
			</div>
		</div>
	</div>
</section><!-- main -->
<section class="socialhome">
	<div class="grid grid-pad">
		<div class="col-4-12">
			<div class="instabox">
				<div class="socialheader">
					<a href="http://instagram.com/naughtydogmusic" title="@naughtydogmusic" target="_blank">@naughtydogmusic</a>
				</div>
				<?php echo do_shortcode('[si_feed size="full" limit="1"]'); ?>
			</div>
		</div>
		<div class="col-4-12">
			<div class="twitterbox">
				<div class="socialheader">
					<a href="https://twitter.com/naughtydogmusic" title="@naughtydogmusic" target="_blank">@naughtydogmusic</a>
				</div>
				<?php echo do_shortcode('[AIGetTwitterFeeds ai_username="naughtydogmusic" ai_numberoftweets="1"]'); ?>
			</div>
		</div>
		<div class="col-4-12">
			<div class="fbbox">
				<div class="socialheader">
					<a href="https://www.facebook.com/ndenterprisesLLC?ref=br_tf" title="Naughty Dog Enterprises" target="_blank">Naughty Dog Enterprises</a>
				</div>
				<?php echo do_shortcode('[custom-facebook-feed]'); ?>
			</div>
		</div>
		<div class="col-1-1">
			<div class="mailinglist">
				<h3>Join our mailing list</h3>
				<?php gravity_form(2, false, false, false, '', true, 20); ?>
			</div>
		</div>
	</div>
</section><!-- social home -->

<?php get_footer(); ?>