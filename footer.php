<?php
/**
 * @package WordPress
 */
?>

<footer>
	<div class="grid grid-pad">
		<div class="col-6-12">
			<p>&copy; <?php echo date("Y");?> Naughty Dog Records</p>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
		<div class="col-6-12">
			<ul class="social">
				<li class="twitter"><a href="https://twitter.com/naughtydogmusic" title="Twitter" target="_blank">Twitter</a></li>
				<li class="facebook"><a href="https://www.facebook.com/ndenterprisesLLC?ref=br_tf" title="Facebook" target="_blank">Facebook</a></li>
				<li class="instagram"><a href="http://instagram.com/naughtydogmusic" title="Instagram" target="_blank">Instagram</a></li>
			</ul>
		</div>
	</div>
</footer>
</div><!-- container -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/retina-1.1.0.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.popupWindow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>

</body>
</html>