<?php
/*
Plugin Name: Multisite Sender Replace
Description: Allow you to easily replace the default email sender name and default email address for all subsites in multisite network
Version: 0.1.3
Author: Andrew Arutunyan
Author URI: http://arutunyan.pp.ua/
Text Domain: mu-sender-replace
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'MUFromChange' ) ):

class MUFromChange {

	function __construct() {

		add_filter('wp_mail_from', array( $this, 'get_from_email' ) );
		add_filter('wp_mail_from_name', array( $this, 'get_from_name' ) );

	}

	function get_from_email( $email ) {
		return 'wordpress@sample.com';
	}

	function get_from_name( $name ) {
		return get_bloginfo('url');
	}

}

endif;

new MUFromChange();
