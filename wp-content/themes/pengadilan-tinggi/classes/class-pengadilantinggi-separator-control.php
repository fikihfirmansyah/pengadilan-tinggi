<?php

/**
 * Customizer Separator Control settings for this theme.
 *
 * @package WordPress
 * @subpackage Pengadilan_Tinggi
 * @since Pengadilan Tinggi 1.0
 */

if (class_exists('WP_Customize_Control')) {

	if (!class_exists('PengadilanTinggi_Separator_Control')) {
		/**
		 * Separator Control.
		 *
		 * @since Pengadilan Tinggi 1.0
		 */
		class PengadilanTinggi_Separator_Control extends WP_Customize_Control
		{
			/**
			 * Render the hr.
			 *
			 * @since Pengadilan Tinggi 1.0
			 */
			public function render_content()
			{
				echo '<hr/>';
			}
		}
	}
}
