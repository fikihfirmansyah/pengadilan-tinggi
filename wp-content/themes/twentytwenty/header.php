<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="container">
		<!--begin Top section-->
		<!--end Top section-->
	</div>
	<!-- <div id="main" role="main"> -->
	<?php
	wp_body_open();
	?>
	<div class="logo-img">
		<!--begin logo -->
		<?php
		// Site title or logo.
		twentytwenty_site_logo();
		?>

		<!-- <a href="index.html"><img src="./images/logo.png" alt="logo mahkamah agung website ramah difable" /></a> -->
	</div>
	<div class="top-overlay" style="display:block">
		<!-- <p><a href="HTTP://	MAHKAMAHAGUNG.GO.ID"><img width="68" height="68" alt="penelusuran perkara" src="./front_image/cts.png" style="float:right;"></p><br> -->

		<header>
			<!--begin top main section -->
			<section class="top-main">
				<div class="top-overlay">
					<div id="top-date"></div>
				</div>
				<div class="top-links" id="slide">
			</section>

			<div class="header">

				<!--begin bar nav section -->
				<section class="bar nav">
					<div class="nav-outer">
						<div class="nav-wrapper">
							<div class="nav-inner">
								<nav id="menu" class="js-active" aria-label=" <?php echo esc_attr_x('Horizontal', 'menu', 'twentytwenty'); ?>">
									<ul class="menu">
										<?php
										if (has_nav_menu('primary')) {
											wp_nav_menu(
												array(
													'container'  => '',
													'items_wrap' => '%3$s',
													'theme_location' => 'primary',
												)
											);
										} elseif (!has_nav_menu('expanded')) {
											wp_list_pages(
												array(
													'match_menu_classes' => true,
													'show_sub_menu_icons' => true,
													'title_li' => false,
												)
											);
										}
										?>
									</ul>
								</nav><!-- .primary-menu-wrapper -->
							</div>
						</div>
					</div>
				</section>
				<div class="cleared reset-box"></div>

				<!--begin header section -->
				<section class="header-position">
					<div class="header-wrapper">
						<div class="cleared reset-box"></div>
						<!-- jquery slider. To customize the slider functionality edit the custom.js file -->
						<!-- <div class="images"> -->
						<div style="padding-top: 92px;">
							<?php add_revslider('Slider Utama'); ?>
							<div class="header-shadow"></div>
						</div>
						<!-- </div> -->
				</section>
			</div>
		</header>
		<div class="cleared reset-box"></div>

		<!--begin breadcrumb -->

		<section id="breadcrumbs" style="top: 90px;">
			<div style="color:white">
				<table style="margin-left: auto; margin-right: auto;">
					<tr>
						<td style="width: 10%; margin: 0px auto; padding:10px; background-color:#ff9900">
							BERITA
						</td>
						<td style="width: 90%; margin: 0px auto; padding:5px; background-color: #872021; ">
							<?php echo do_shortcode("[post-marguee]"); ?>
						</td>
					</tr>
				</table>
			</div>
		</section>
		<!--begin content  layout section -->
		<div class="box sheet" style="top:48px">
			<div class="box-body sheet-body">
				<div class="layout-wrapper">
					<div class="content-layout">
						<div class="content-layout-row">
