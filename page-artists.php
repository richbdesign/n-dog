<?php
/**
 * Template Name: Artists Page
 * Description: Artists page template
 *
 * @package WordPress
 */

get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

<?php the_post(); ?>

<section class="main mainbg">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<ul class="artistslist">
			<?php wp_reset_query(); ?>
			<?php
			$artistslinks = new WP_Query(array('post_type' => 'artist', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1));
			$count = 0;
			while ($artistslinks->have_posts()) : $artistslinks->the_post();
			?>
				<?php if ($count % 3 == 2) { ?>
					<li class="last">
				<?php } else { ?>
					<li>
				<?php } ?>
	    			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('artistthmb', array('class' => 'artistthmbpic')); ?></a>
	    			<h3><?php the_title(); ?></h3>
					</li>
		    <?php $count++;
		    endwhile; // end of artists loop. ?>
		</ul>
		</div>
	</div>
</section><!-- main -->

<?php get_footer(); ?>