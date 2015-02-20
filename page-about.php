<?php
/**
 * Template Name: About Page
 * Description: About page template
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
<section class="main whitebg">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<?php the_content(); ?>
		</div>
	</div>
</section><!-- main -->
<section class="team">
	<div class="grid grid-pad">
		<?php the_field('team_members'); ?>
	</div>
</section>

<?php get_footer(); ?>