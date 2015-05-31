<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Umex
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="bottom-container">
			<div class="footer_col1" role="info">
				<address><?php echo get_theme_mod( 'umex_address','' ); ?></address></br>
			</div>
			<div class="footer_col2" role="info">
			</div>
			<div class="footer_col3" role="info">
			</div>
			<div class="clear"></div>
		</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</div><!-- #page -->
</body>
</html>
