<?php
/*
Plugin Name: Accessibility Lite - A super lightweight Wordpress plugin
Description: Accessibility Light ♿ SEO FRIENDLY plugin helping  you run an accessible WordPress site for people with disabilities.
Version: 3.6.1
Plugin URI: https://idm2.com
Author: Sitelinx
Author URI: https://sitelinx.co.il
Text Domain: accessibility-light
*/

/**
 * Main File
 * Template is written by Sitelinx
 * @Version: 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // only can be accessed through wp
} 
 
final class ACL_Sitelinx{
	
	/**
	 * The single instance of the class.
	 *
	 * @private
	 */
	protected static $_instance = null;
	
	/**
	 * Stored all plugin configurations.
	 *
	 * @private
	 */
	private $configuration;
	 
	/**
	 * Plugin Instance.
	 *
	 * Ensures only one instance of this plugin is loaded or can be loaded.
	 *
	 * @static
	 * @return plugin - Main instance.
	 */
	 
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	/**
	 * Plugin Constructor.
	 */
	 
	public function __construct(){
		
		$this->apply_configuration();
		$this->init();
	}
	
	/**
	 * Apply plugin Configuration
	 * All configurations is written in includes/configurations.hp
	 */
	 
	public function apply_configuration(){
		require_once "includes/configurations.php";
		
		$this->configurations = $configurations;
	}
	
	/**
	 * Plugin first init
	 */
	 
	public function init(){
		$this->defined();		
		add_action( 'wp_enqueue_scripts', array($this, 'scripts' ) );
		add_action( 'admin_enqueue_scripts', array($this, 'admin_scripts' ) );
		add_action( 'plugins_loaded', array( $this, 'language_setting' ) );
		$this->includes();
		$this->classes();
		
		/* plugin activation */
		register_activation_hook( __FILE__, array( $this, 'activation' ) );
		
		/* plugin deactivation */
		register_deactivation_hook( __FILE__, array( $this, 'deactivation' ) );
	}
	
	/**
	 * define constant variables
	 */

	private function defined(){
		define( $this->configurations['path'], dirname( __FILE__ ) );
		define( $this->configurations['url'], plugins_url( '/', __FILE__ ) );
	}
	
	/**
	 * include public scripts
	 */

	public function scripts(){
		$styles = isset( $this->configurations['styles'] ) ? $this->configurations['styles'] : array();
		$scripts = isset( $this->configurations['scripts'] ) ? $this->configurations['scripts'] : array();
		
		//enqueue styles
		if( sizeof( $styles ) ){
			foreach( $styles as $style ){
				$handle = isset( $style['handle'] ) ? $style['handle'] : '';
				$src = isset( $style['src'] ) ? ( file_exists( dirname( __FILE__ ) . '/assets/css/' . $style['src'] ) ? plugins_url( '/', __FILE__ ) . 'assets/css/' . $style['src'] : $style['src'] ) : false;
				$deps = isset( $style['deps'] ) ? $style['deps'] : array();
				$ver = isset( $style['ver'] ) ? $style['ver'] : false;
				$media = isset( $style['media'] ) ? $style['media'] : 'all';
				wp_enqueue_style( $handle, $src, $deps, $ver, $media );
			}
		}
		
		//enqueue scripts
		
			if( sizeof( $scripts ) ){
				foreach( $scripts as $script ){
					$handle = isset( $script['handle'] ) ? $script['handle'] : '';
					$src = isset( $script['src'] ) ? ( file_exists( dirname( __FILE__ ) . '/assets/js/' . $script['src'] ) ? plugins_url( '/', __FILE__ ) . 'assets/js/' . $script['src'] : $script['src'] ) : false;
					$deps = isset( $script['deps'] ) ? $script['deps'] : array();
					$ver = isset( $script['ver'] ) ? $script['ver'] : false;
					$in_footer = isset( $script['in_footer'] ) ? $script['in_footer'] : false;
					wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
				}
			}
		
	}
	
	/**
	 * include admin scripts
	 */

	public function admin_scripts(){
		$styles = isset( $this->configurations['admin_styles'] ) ? $this->configurations['admin_styles'] : array();

		$scripts = isset( $this->configurations['admin_scripts'] ) ? $this->configurations['admin_scripts'] : array();
		
			if( sizeof( $styles ) ){
				foreach( $styles as $style ){
					$handle = isset( $style['handle'] ) ? $style['handle'] : '';
					$src = isset( $style['src'] ) ? ( file_exists( dirname( __FILE__ ) . '/assets/admin/css/' . $style['src'] ) ? plugins_url( '/', __FILE__ ) . 'assets/admin/css/' . $style['src'] : $style['src'] ) : false;
					$deps = isset( $style['deps'] ) ? $style['deps'] : array();
					$ver = isset( $style['ver'] ) ? $style['ver'] : false;
					$media = isset( $style['media'] ) ? $style['media'] : 'all';
					wp_enqueue_style( $handle, $src, $deps, $ver, $media );
				}
			}

		//enqueue scripts
		$current_screen = get_current_screen();
		/* Check wether this page is accessiblity or not if yes please add the scripts */
		if( $current_screen->id === "toplevel_page_accessible-sitelinx" ){
			if( sizeof( $scripts ) ){
				foreach( $scripts as $script ){
					$handle = isset( $script['handle'] ) ? $script['handle'] : '';
					$src = isset( $script['src'] ) ? ( file_exists( dirname( __FILE__ ) . '/assets/admin/js/' . $script['src'] ) ? plugins_url( '/', __FILE__ ) . 'assets/admin/js/' . $script['src'] : $script['src'] ) : false;
					$deps = isset( $script['deps'] ) ? $script['deps'] : array();
					$ver = isset( $script['ver'] ) ? $script['ver'] : false;
					$in_footer = isset( $script['in_footer'] ) ? $script['in_footer'] : false;
					wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
				}
			}
		}
	}
	
	/**
	 * enable plugin translation
	 */	
	public function language_setting() {
		load_plugin_textdomain( $this->plugin_textdomain(), false,  basename( __DIR__ ) . '/languages' );
	}
	
	/**
	 * Get plugin textdomain
	 * @return: plugin_textdomain
	 */	 
	 public function plugin_textdomain(){
		 
		 return $this->configurations['plugin_textdomain'];
	 }
	 
	/**
	 * include support files
	 */	
	private function includes(){
		$includes = isset( $this->configurations['includes'] ) ? $this->configurations['includes'] : array();
		
		if( sizeof( $includes ) ){
			foreach( $includes as $include ){
				require_once dirname( __FILE__ ) . '/includes/' . $include;
			}
		}
	}
	
	/**
	 * declare classes
	 */	
	private function classes(){
		$classes = isset( $this->configurations['classes'] ) ? $this->configurations['classes'] : array();
		
		if( sizeof( $classes ) ){
			foreach( $classes as $class_name=>$path ){
				require_once dirname( __FILE__ ) . '/includes/' . $path;
				
				$this->$class_name = new $class_name();
			}
		}
	}
	
	/**
	 * get template file
	 */	
	public function get_template( $template_path ){
		
		$template_path = apply_filters( $this->plugin_name() . '_template_path', $template_path );
		
		include dirname( __FILE__ ) . '/templates/' . $template_path;
	}
	
	/**
	 * Get plugin name
	 * @return: plugin_name
	 */
	 
	 public function plugin_name(){
		 
		 return $this->configurations['plugin_name'];
	 }
	 
	/**
	 * Plugin Activation
	 * @return: void
	 */	 
	 public function activation(){
		
		//write your codes here...
		$sitelinx_option = get_option( 'sitelinx' );
	 
		if (  $sitelinx_option  ) {
		 
			// The option already exists, so update it.
			update_option( 'sitelinx', '' );
		 
		}
	 }
	 
	/**
	 * Plugin Deactivation
	 * @return: void
	 */	 
	 public function deactivation(){
		
		//write your codes here...
	 }

}

/**
 * Main instance of Plugin.
 *
 * Returns the main instance of plugin class to prevent the need to use globals.
 *
 * @return Your_Plugin_Name
 */
function ACL_Sitelinx() {
	return ACL_Sitelinx::instance();
}

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'acl_sitelinx_add_action_links' );

function acl_sitelinx_add_action_links ( $links ) {
	
	$mylinks = array('<a href="' . admin_url( 'admin.php?page=accessible-sitelinx' ) . '">'. __('Settings', 'accessibility-light') .'</a>');
	
	return array_merge(  $mylinks, $links );
}

// Global for backwards compatibility.
$GLOBALS[ACL_Sitelinx()->plugin_name()] = ACL_Sitelinx();


//Genral plugin notification for ratings. 
function tbs_acl_rating_admin_notice(){
    global $pagenow;
    $user_id = get_current_user_id();
    if ( !get_user_meta( $user_id, 'acl_notice_dismissed' ) ){
    ?>

    	<div id="rate-us-wp" class="notice updated is-dismissible"><p> <?php echo __( "Like Accessibility Lite Plugin? GIVE US A 5 STAR RATING", "accessibility-light"); ?> <a href="https://wordpress.org/support/plugin/accessibility-light/reviews/?filter=5#new-post" target="_blank" id="cliecked-on-rview"><?php echo __( "Click Here", "accessibility-light" ); ?></a></p><a style="text-decoration: none;" href="?acl-notice-dismissed"> <?php echo  __( "Already rated! | Dismiss forever", "accessibility-light"); ?>.</a><button type="button" class="notice-dismiss"><span class="screen-reader-text"><?php echo __( "Dismiss this notice. ", "accessibility-light" ); ?></span></button></div>

    <?php
	}
   
}
add_action('admin_notices', 'tbs_acl_rating_admin_notice');

//Dismiss this notice if rated or don't want to see on screen.
function tbs_acl_plugin_notice_dismissed() {
    $user_id = get_current_user_id();
    if ( isset( $_GET['acl-notice-dismissed'] ) ){
        add_user_meta( $user_id, 'acl_notice_dismissed', 'true', true );
    }
}
add_action( 'admin_init', 'tbs_acl_plugin_notice_dismissed' );
?>
