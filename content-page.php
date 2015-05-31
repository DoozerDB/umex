<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Umex
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- втыкаем перед заголовком два столбца для двух роликов или картинок -->
	<?php if (is_front_page ()):?>
		<div class="container">
			<div class="first_media">
			</div>
			<div class="second_media">
			</div>
			<div class="clear"></div>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	<?php if (is_front_page ()):?>
		<div class="column">
	<?php endif; ?>
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'umex' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<?php if (is_front_page ()):?>
		</div>
	<?php endif; ?>

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'umex' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
