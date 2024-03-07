<?php

/**
 * Refine_SC
 *
 * @package Refine
 * @since 2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Refine_SC_Instant_Quote' ) ) {

	/**
	 * Class Refine_SC_Instant_Quote
	 *
	 * @since 2.0
	 */
	class Refine_SC_Instant_Quote {

		/**
		 * Initialize
		 *
		 * @access public
		 * @return void
		 */
		public function __construct() {

			add_shortcode('refine-instant-quote', [ $this, 'index']);
		}
        
		/**
		 * Setup 
		 *
		 * @access public
		 * @return void
		 * @since 2.0
		 */
		private function index($atts) {

			extract(shortcode_atts(array(
		        "class" => '',
		        "ids" => '25, 21, 4, 9, 22'
		    ), $atts));

		    $ids_array = array_map('intval', explode(',', $ids)); // Convert ids string to array with int value from string

			$categories = get_terms([
				'taxonomy' => Refine_Product::get_taxonomy(),
				'include' => $ids_array,
				'hide_empty' => false,
				'orderby' => 'include',
			]);

			return $this->get_html();

		}
        
		/**
		 * Render
		 *
		 * @access public
		 * @return void
		 * @since 2.0
		 */
		private function get_html() {
            
            $result = null;

            ob_start();
			    require dirname( __FILE__ ) . '/html-template.php';
			    $result = ob_get_contents();
			ob_end_clean();

			return $result;
        }
		
	}

	new Refine_SC_Instant_Quote();
}
