<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta id="viewport-tag" name="viewport" content="width=device-width, initial-scale=1" />
	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( has_action( 'aios_seotools_gtm_body' ) )  { do_action('aios_seotools_gtm_body'); } ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Mobile Header") ) : ?>
	<?php endif ?>

	<div id="main-wrapper">


		<?php do_action('aios_landing_page_header'); ?>
		<?php do_action('aios_neighborhoods_header'); ?>


		<header class="header">
			<div class="header-container">
				<div class="header-logo">
					<a href="[blogurl]" aria-label="logo">
						<div class="header-img">
							<img alt="header" class="img-header"
								src="<?php echo get_stylesheet_directory_uri() ?>/images/header-logo.png" width="202"
								height="184" />
							<img alt="header" class="img-header"
								src="<?php echo get_stylesheet_directory_uri() ?>/images/header-fix.png" width="87"
								height="83" />
						</div>
					</a>
				</div>
				<nav class="navigation">
					<div class="header-contact">
						<div class="header-phone">
							<span class="ai-font-phone"></span>
							<?php echo do_shortcode('[ai_phone href="+1.205.308.2835"]205.308.2835[/ai_phone]')?>
						</div>
						<div class="header-email">
							<span class="ai-font-envelope-f"></span>
							<?php echo do_shortcode('[mail_to email="info@seluxuryliving.com"]info@seluxuryliving.com[/mail_to]')?>
						</div>
					</div>


					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>

				</nav>
				<div class="header-logo-right">
					<a href="[blogurl]" aria-label="logo">
						<div class="header-img">
							<img alt="header" class="img-header"
								src="<?php echo get_stylesheet_directory_uri() ?>/images/header-right-logo.png"
								width="143" height="59" />
						</div>
					</a>
				</div>

			</div>
		</header>


		<main>
			<h2 class="aios-starter-theme-hide-title">Main Content</h2>

			<!-- ip banner goes here -->
			<?php
    if ( ! is_home() && !is_page_template( 'template-homepage.php' ) && is_custom_field_banner( get_queried_object() ) && is_active_sidebar('aios-inner-pages-banner'))  {
      dynamic_sidebar('aios-inner-pages-banner');
    }
    ?>
			<!-- ip banner goes here -->


			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>

			<div id="inner-page-wrapper">
				<div class="container">

					<?php endif ?>