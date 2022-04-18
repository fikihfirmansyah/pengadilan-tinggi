<?php

/**
 * Header file for the Pengadilan Tinggi WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Pengadilan_Tinggi
 * @since Pengadilan Tinggi 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<style>
		.switcher {
			float: right;
		}
	</style>

</head>

<body <?php body_class(); ?>>
	<?php
	wp_body_open();
	?>

	<header>
		<div class="logo-img">
			<!--begin logo -->
		</div>
		<!--begin top main section -->
		<section class="top-main">
			<div class="top-overlay">
				<?php
				if (function_exists('the_custom_logo')) {
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
				}
				?>
				<table border="0" cellpadding="0" cellspacing="0" style="border-width:0px; width:100%">
					<tbody>
						<tr>
							<td style="width:50%">
								<?php
								if (function_exists('the_custom_logo')) {
									$custom_logo_id = get_theme_mod('custom_logo');
									$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
								}
								?>
								<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo[0] ?>" alt="logo mahkamah agung website ramah difable" /></a>

							</td>
							<td style="width:50%; float:right;">
								<?php echo do_shortcode('[gtranslate]'); ?><br><br><br>
								<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . "/assets/images/W3C.png" ?>" width="100px" style="float:right" alt="logo mahkamah agung website ramah difable" /></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>

		<div class="header">

			<!--begin bar nav section -->
			<section class="bar nav">
				<div class="nav-outer">
					<div class="nav-wrapper">
						<div class="nav-inner">
							<nav id="menu" class="js-active" aria-label=" <?php echo esc_attr_x('Horizontal', 'menu', 'pengadilantinggi'); ?>">
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
	<div class="box sheet" style="top:130px">
		<div class="box-body sheet-body">
			<div class="layout-wrapper">
				<div class="content-layout">
					<div class="content-layout-row">