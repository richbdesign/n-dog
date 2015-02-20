<?php
/**
 * Template Name: Contact Page
 * Description: Contact page template
 *
 * @package WordPress
 */
 
get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

<?php the_post(); ?>
<section class="main contactbg">
	<div class="grid grid-pad">
		<div class="col-4-12">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<div class="col-8-12">
			<?php gravity_form(1, false, false, false, '', true, 20); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>