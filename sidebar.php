<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Umex
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

/**--- Prima+ ---*/
/**--- Header slider ---*/
<?php
	if (! is_active_sidebar('headerslider')) {
		return;
	}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar('headerslider'); ?>
</div><!-- #secondary -->

/**--- Footer info 1 ---*/
<?php
	if (! is_active_sidebar('footerinfo1')) {
		return;
	}
?>
<?php dynamic_sidebar('footerinfo1'); ?>

/**--- Footer info 2 ---*/
<?php
	if (! is_active_sidebar('footerinfo2')) {
		return;
	}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar('footerinfo2'); ?>
</div><!-- #secondary -->

/**--- Footer info 3 ---*/
<?php
	if (! is_active_sidebar('footerinfo3')) {
		return;
	}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar('footerinfo3'); ?>
</div><!-- #secondary -->

/**--- Prima- ---*/