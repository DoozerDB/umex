<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Umex
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'umex' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="container">
				<div class="col1">
					<?php if ( get_theme_mod('site_logo') ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
					<?php else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php endif; ?>
				</div>
				<div class="col2">
					<div class="phones">
						<div class="first_block">
							<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone','' ); ?>"><?php echo get_theme_mod( 'umex_phone','' ); ?></a></br>
							<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone1','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone1','' ); ?>"><?php echo get_theme_mod( 'umex_phone1','' ); ?></a></br>
							<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone2','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone2','' ); ?>"><?php echo get_theme_mod( 'umex_phone2','' ); ?></a></br>
							<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone3','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone3','' ); ?>"><?php echo get_theme_mod( 'umex_phone3','' ); ?></a></br>
							<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone4','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone4','' ); ?>"><?php echo get_theme_mod( 'umex_phone4','' ); ?></a></br>
						</div>
						<div class="second_block">
							<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone5','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone5','' ); ?>"><?php echo get_theme_mod( 'umex_phone5','' ); ?></a></br>
							<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone6','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone6','' ); ?>"><?php echo get_theme_mod( 'umex_phone6','' ); ?></a></br>
							<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone7','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone7','' ); ?>"><?php echo get_theme_mod( 'umex_phone7','' ); ?></a></br>
							<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone8','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone8','' ); ?>"><?php echo get_theme_mod( 'umex_phone8','' ); ?></a></br>
							<a class="contactphone" href="tel: <?php echo get_theme_mod( 'umex_phone9','' ); ?>" title="<?php echo get_theme_mod( 'umex_phone9','' ); ?>"><?php echo get_theme_mod( 'umex_phone9','' ); ?></a></br>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="col3">
					<h1><i class="fa fa-map-marker" style="color: #0ea0c3;">&nbsp;<a href="/contacts" style="color: #0ea0c3;"></i>Контакты</a></h1>
					<div class="timetable">
						<h4>Мы работаем:</h4></br>
						<?php echo get_theme_mod( 'umex_timetable_wr','' ); ?></br>
						<?php echo get_theme_mod( 'umex_timetable_sat','' ); ?></br>
						<?php echo get_theme_mod( 'umex_timetable_sun','' ); ?></br>
					</div>
				</div>
				<div class="clear"></div>
				<!-- <div style="clear: both;"></div> -->
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'umex' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php if (is_front_page ()):?>
			<!--<div class="site-branding">-->
				<div class="maincontainer">
					<div class="mainslider">
						<?php if ( is_active_sidebar( 'headerslider' ) ) : ?>
							<div id="main-slider" role="slider">
								<?php dynamic_sidebar( 'headerslider' ); ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="maininfo">
						<a href="#contact_form_pop" class="fancybox"><form><button>Задать вопрос</button></form></a><br/>
						<div style="display:none" class="fancybox-hidden">
							<div id="contact_form_pop">
								<?php echo do_shortcode('[contact-form-7 id="4"]'); ?>
							</div>
						</div>
						<a href="#contact_form_pop2" class="fancybox">
							<form>
								<button class="white">
									Состояние заказа
								</button>
							</form>
							<div style="display:none" class="fancybox-hidden">
								<div id="contact_form_pop2">
									<?php echo do_shortcode('[contact-form-7 id="86"]'); ?>
								</div>
							</div>
						</a></br>
						<div style="text-align: center; color: #0ea0c3;"><i class="fa fa-truck fa-lg"></i>&nbsp;<a href="/shipping">О доставке</a></div>
					</div>
				</div>
			<!--</div>-->
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
