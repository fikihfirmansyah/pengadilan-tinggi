<?php

/**
 * Pengadilan Tinggi SVG Icon helper functions
 *
 * @package WordPress
 * @subpackage Pengadilan_Tinggi
 * @since Pengadilan Tinggi 1.0
 */

if (!function_exists('pengadilantinggi_the_theme_svg')) {
	/**
	 * Output and Get Theme SVG.
	 * Output and get the SVG markup for an icon in the PengadilanTinggi_SVG_Icons class.
	 *
	 * @since Pengadilan Tinggi 1.0
	 *
	 * @param string $svg_name The name of the icon.
	 * @param string $group    The group the icon belongs to.
	 * @param string $color    Color code.
	 */
	function pengadilantinggi_the_theme_svg($svg_name, $group = 'ui', $color = '')
	{
		echo pengadilantinggi_get_theme_svg($svg_name, $group, $color); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in pengadilantinggi_get_theme_svg().
	}
}

if (!function_exists('pengadilantinggi_get_theme_svg')) {

	/**
	 * Get information about the SVG icon.
	 *
	 * @since Pengadilan Tinggi 1.0
	 *
	 * @param string $svg_name The name of the icon.
	 * @param string $group    The group the icon belongs to.
	 * @param string $color    Color code.
	 */
	function pengadilantinggi_get_theme_svg($svg_name, $group = 'ui', $color = '')
	{

		// Make sure that only our allowed tags and attributes are included.
		$svg = wp_kses(
			PengadilanTinggi_SVG_Icons::get_svg($svg_name, $group, $color),
			array(
				'svg'     => array(
					'class'       => true,
					'xmlns'       => true,
					'width'       => true,
					'height'      => true,
					'viewbox'     => true,
					'aria-hidden' => true,
					'role'        => true,
					'focusable'   => true,
				),
				'path'    => array(
					'fill'      => true,
					'fill-rule' => true,
					'd'         => true,
					'transform' => true,
				),
				'polygon' => array(
					'fill'      => true,
					'fill-rule' => true,
					'points'    => true,
					'transform' => true,
					'focusable' => true,
				),
			)
		);

		if (!$svg) {
			return false;
		}
		return $svg;
	}
}
