<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!--begin footer section -->
<footer style="height:100%; color:white; background-color: #872021; ">
	<?php
	dynamic_sidebar('main-footer');
	?>
</footer>
<?php wp_footer(); ?>

</body>

</html>