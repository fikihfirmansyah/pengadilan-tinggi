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
								<br>
								<ul class="wp-block-social-links" style="width:30px;   display: grid; grid-template-columns: auto auto auto;">
									<li class="wp-social-link wp-social-link-facebook wp-block-social-link"><a href="https://web.facebook.com/pengadilan.medan" aria-label="Facebook: https://web.facebook.com/pengadilan.medan" class="wp-block-social-link-anchor" data-fontsize="24"> <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false">
												<path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path>
											</svg></a></li>

									<li class="wp-social-link wp-social-link-instagram wp-block-social-link"><a href="https://www.instagram.com/pengadilantinggimedan/" aria-label="Instagram: https://www.instagram.com/pengadilantinggimedan/" class="wp-block-social-link-anchor" data-fontsize="24"> <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false">
												<path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path>
											</svg></a></li>

									<li class="wp-social-link wp-social-link-youtube wp-block-social-link"><a href="https://www.youtube.com/channel/UCxQTWkMjkBZwLxes1QeNBXw" aria-label="YouTube: https://www.youtube.com/channel/UCxQTWkMjkBZwLxes1QeNBXw" class="wp-block-social-link-anchor" data-fontsize="24"> <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false">
												<path d="M21.8,8.001c0,0-0.195-1.378-0.795-1.985c-0.76-0.797-1.613-0.801-2.004-0.847c-2.799-0.202-6.997-0.202-6.997-0.202 h-0.009c0,0-4.198,0-6.997,0.202C4.608,5.216,3.756,5.22,2.995,6.016C2.395,6.623,2.2,8.001,2.2,8.001S2,9.62,2,11.238v1.517 c0,1.618,0.2,3.237,0.2,3.237s0.195,1.378,0.795,1.985c0.761,0.797,1.76,0.771,2.205,0.855c1.6,0.153,6.8,0.201,6.8,0.201 s4.203-0.006,7.001-0.209c0.391-0.047,1.243-0.051,2.004-0.847c0.6-0.607,0.795-1.985,0.795-1.985s0.2-1.618,0.2-3.237v-1.517 C22,9.62,21.8,8.001,21.8,8.001z M9.935,14.594l-0.001-5.62l5.404,2.82L9.935,14.594z"></path>
											</svg></a></li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>

		<?php if (is_front_page()) { ?>
			<div class="header" style="height: 240px;">
			<?php } else {
			?>
				<div class="header" style="height: 100px;">
				<?php } ?>

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

				<?php if (is_front_page()) { ?>
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
				<?php } else { ?>
				<?php } ?>
				</div>
	</header>
	<div class="cleared reset-box"></div>

	<!--begin breadcrumb -->


	<?php if (is_front_page()) {
	?>
		<section id="breadcrumbs" style="top: 204px;">
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
		<div class="box sheet" style="top:163px; ">
			<div class="box-body sheet-body">
				<div class="layout-wrapper">
					<div class="content-layout">
						<!-- <div class="content-layout-row"> -->
					<?php } else {
					?>
						<section id="breadcrumbs" style="top: -241px; left: 2px;">
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
						<div class="box sheet" style="top: -283px; left: 2px;">
							<div class="box-body sheet-body">
								<div class="layout-wrapper">
									<div class="content-layout">
										<div class="content-layout-row">
										<?php } ?>