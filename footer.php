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
				<div>
					<address><?php echo get_theme_mod( 'umex_address','' ); ?></address>
				</div>
				<div class="footer_phones">
					<div class="footer_first_block">
						<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone','' ); ?>"><?php echo get_theme_mod( 'umex_phone','' ); ?></a></br>
						<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone1','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone1','' ); ?>"><?php echo get_theme_mod( 'umex_phone1','' ); ?></a></br>
						<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone2','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone2','' ); ?>"><?php echo get_theme_mod( 'umex_phone2','' ); ?></a></br>
					</div>
					<div class="footer_second_block">
						<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone3','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone3','' ); ?>"><?php echo get_theme_mod( 'umex_phone3','' ); ?></a></br>
						<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone4','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone4','' ); ?>"><?php echo get_theme_mod( 'umex_phone4','' ); ?></a></br>
						<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone5','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone5','' ); ?>"><?php echo get_theme_mod( 'umex_phone5','' ); ?></a></br>
					</div>
					<div class="footer_third_block">
						<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone6','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone6','' ); ?>"><?php echo get_theme_mod( 'umex_phone6','' ); ?></a></br>
						<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone7','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone7','' ); ?>"><?php echo get_theme_mod( 'umex_phone7','' ); ?></a></br>
						<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone8','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone8','' ); ?>"><?php echo get_theme_mod( 'umex_phone8','' ); ?></a></br>
						<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone9','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone9','' ); ?>"><?php echo get_theme_mod( 'umex_phone9','' ); ?></a></br>
					</div>
					<div class="clear" style="margin-bottom: 2vw;"></div>
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
