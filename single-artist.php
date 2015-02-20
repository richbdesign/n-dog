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
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
		<div class="col-9-12">
			<div class="slideshow">
				<div class="flexslider">
					<ul class="slides">
						<?php $imagemain = get_field('artist_photo_1');
							if (!empty($imagemain)):
							echo '<li data-thumb="'.$imagemain[url].'">';
							echo '<img src="'.$imagemain[url].'"/>';
							echo '</li>'; ?>
						<?php endif; ?>
						<?php $imagemain2 = get_field('artist_photo_2');
							if (!empty($imagemain2)):
							echo '<li data-thumb="'.$imagemain2[url].'">';
							echo '<img src="'.$imagemain2[url].'"/>';
							echo '</li>'; ?>
						<?php endif; ?>
						<?php $imagemain3 = get_field('artist_photo_3');
							if (!empty($imagemain3)):
							echo '<li data-thumb="'.$imagemain3[url].'">';
							echo '<img src="'.$imagemain3[url].'"/>';
							echo '</li>'; ?>
						<?php endif; ?>
						<?php $imagemain4 = get_field('artist_photo_4');
							if (!empty($imagemain4)):
							echo '<li data-thumb="'.$imagemain4[url].'">';
							echo '<img src="'.$imagemain4[url].'"/>';
							echo '</li>'; ?>
						<?php endif; ?>
						<?php $imagemain5 = get_field('artist_photo_5');
							if (!empty($imagemain5)):
							echo '<li data-thumb="'.$imagemain5[url].'">';
							echo '<img src="'.$imagemain5[url].'"/>';
							echo '</li>'; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-3-12">
			<div class="featuredtracks">
				<h3>Featured Tracks</h3>
				
				<ul class="featuredtracklist">
					<?php
					$featuredsong1btn = get_field('featured_song_1'); 
						if (!empty($featuredsong1btn)):
							$featuredsong1btnurl = $featuredsong1btn[url];
							$featuredsong1title = get_field('featured_song_1_title');
							$featuredsong1album = get_field('featured_song_1_album');
							echo '<li>';
					       	echo do_shortcode('[sc_embed_player fileurl="'.$featuredsong1btnurl.'"]');
					       	echo '<span><strong>'.$featuredsong1title.'</strong><br/>'.$featuredsong1album.'</span><div class="clear"></div>';
					       	echo '</li>'; ?>
					<?php endif; ?>
					<?php
					$featuredsong2btn = get_field('featured_song_2'); 
						if (!empty($featuredsong2btn)):
							echo '<li>';
							$featuredsong2btnurl = $featuredsong2btn[url];
							$featuredsong2title = get_field('featured_song_2_title');
							$featuredsong2album = get_field('featured_song_2_album');
					       	echo do_shortcode('[sc_embed_player fileurl="'.$featuredsong2btnurl.'"]');
					       	echo '<span><strong>'.$featuredsong2title.'</strong><br/>'.$featuredsong2album.'</span><div class="clear"></div>';
					       	echo '</li>'; ?>
					<?php endif; ?>
					<?php
					$featuredsong3btn = get_field('featured_song_3'); 
						if (!empty($featuredsong3btn)):
							echo '<li>';
							$featuredsong3btnurl = $featuredsong3btn[url];
							$featuredsong3title = get_field('featured_song_3_title');
							$featuredsong3album = get_field('featured_song_3_album');
					       	echo do_shortcode('[sc_embed_player fileurl="'.$featuredsong3btnurl.'"]');
					       	echo '<span><strong>'.$featuredsong3title.'</strong><br/>'.$featuredsong3album.'</span><div class="clear"></div>';
					       	echo '</li>'; ?>
					<?php endif; ?>
					<?php
					$featuredsong4btn = get_field('featured_song_4'); 
						if (!empty($featuredsong4btn)):
							echo '<li>';
							$featuredsong4btnurl = $featuredsong4btn[url];
							$featuredsong4title = get_field('featured_song_4_title');
							$featuredsong4album = get_field('featured_song_4_album');
					       	echo do_shortcode('[sc_embed_player fileurl="'.$featuredsong4btnurl.'"]');
					       	echo '<span><strong>'.$featuredsong4title.'</strong><br/>'.$featuredsong4album.'</span><div class="clear"></div>';
					       	echo '</li>'; ?>
					<?php endif; ?>
				</ul>
				
			</div>
				
			<ul class="artistsocial">
			<?php
			$twitterlink = get_field('twitter'); 
				if (!empty($twitterlink)):
			       	echo '<li class="twitter"><a href="'.$twitterlink.'" title="Twitter" target="_blank">Twitter</a></li>'; ?>
			<?php endif; ?>
			<?php
			$fblink = get_field('facebook'); 
				if (!empty($fblink)):
			       	echo '<li class="facebook"><a href="'.$fblink.'" title="Twitter" target="_blank">Twitter</a></li>'; ?>
			<?php endif; ?>
			<?php
			$instalink = get_field('instagram'); 
				if (!empty($instalink)):
			       	echo '<li class="instagram"><a href="'.$instalink.'" title="Twitter" target="_blank">Twitter</a></li>'; ?>
			<?php endif; ?>
			<?php
			$soundclink = get_field('soundcloud'); 
				if (!empty($soundclink)):
			       	echo '<li class="soundcloud"><a href="'.$soundclink.'" title="Twitter" target="_blank">Twitter</a></li>'; ?>
			<?php endif; ?>
			<?php
			$youtubelink = get_field('youtube'); 
				if (!empty($youtubelink)):
			       	echo '<li class="youtube"><a href="'.$youtubelink.'" title="Twitter" target="_blank">Twitter</a></li>'; ?>
			<?php endif; ?>
			</ul>
				
		</div>
		<div class="col-6-12">
			<?php the_content(); ?>
		</div>
		<div class="col-6-12">
			<?php the_field('right_content'); ?>
		</div>
	</div>
</section>

<?php endwhile; ?>

<section class="main mainbg">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<h3>Releases</h3>
			<ul class="releases">
				<?php
				$albumreleases = new WP_Query(array('post_type' => 'album', 'artists' => ''.the_slug().''));
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
	</div>
</section>
<section class="main nobottom">
	<div class="grid grid-pad">
		<div class="col-6-12">
			<h3>Latest News</h3>
			<div class="artistnews">
				<?php wp_reset_query(); ?>
				<?php
				$recentposts = new WP_Query(array('category_name' => ''.the_slug().'', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 3));
				if ($recentposts->have_posts()) : while ($recentposts->have_posts()) : $recentposts->the_post();
				?>
				
					<article <?php post_class(); ?>>
						<p class="meta"><?php echo get_the_date(); ?></p>
						<p><strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></strong></p>
					</article>
					
			    <?php endwhile; ?>
			    <?php else : ?>
					
						<p>No news at this time.</p>
						
					<?php endif; // end of news loop. ?>
			    <?php wp_reset_query(); ?>
			</div>
		</div>
		<div class="col-6-12">
			<div class="extraleft">
				<h3>Live Dates</h3>
				<ul  class="livelist">
					<?php
					$livedates = new WP_Query(array('post_type' => 'live', 'bands' => ''.the_slug().'', 'order' => 'ASC'));
					if ($livedates->have_posts()) : while ($livedates->have_posts()) : $livedates->the_post();
					?>
						<li>
							<?php the_field('live_date'); ?><br/>
							<span><?php the_field('live_location'); ?></span><br/>
							<span class="blue"><?php the_title(); ?></span>
						</li>
						
					<?php endwhile; ?>
					<?php else : ?>
					
						<li>No live shows at this time.</li>
						
					<?php endif; // end of live loop. ?>
					<?php wp_reset_query(); ?>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); //the Footer ?>