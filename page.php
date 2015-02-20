<?php
/**
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
<section class="main mainbg">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>
</section><!-- main -->

<?php get_footer(); ?>