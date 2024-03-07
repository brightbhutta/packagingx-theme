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

		private $leads = '';
		private $leadmeta = '';
		private $google_sheet = '';

		/**
		 * Initialize
		 *
		 * @access public
		 * @return void
		 */
		public function __construct() {

			$this->leads = new Refine_Leads();
			$this->leadmeta = new Refine_Lead_Meta();

			add_shortcode('refine-instant-quote', [ $this, 'index']);
			add_action( 'wp_ajax_get_instant_quote', [ $this, 'get_instant_quote_hanlder' ] );
            add_action( 'wp_ajax_nopriv_get_instant_quote', [ $this, 'get_instant_quote_hanlder' ] );
		}
        
		/**
		 * Setup 
		 *
		 * @access public
		 * @return void
		 * @since 2.0
		 */
		public function index($atts) {

			extract(shortcode_atts(array(
		        "class" => '',
		        "ids" => '25, 21, 4, 9, 22',
		        "form_type" => 'default',
		        "btn_text" => 'Submit',
		    ), $atts));

		    $products = new WP_Query( [ 'post_type' => Refine_Product::get_post_type(), 'posts_per_page' => -1 ] );
			$products_array = wp_list_pluck( $products->posts, 'post_title', 'ID' );

		    if( $form_type == 'dieline' ){

		    	$args = array(
					'post_type' => Refine_Product::get_post_type(),
					'posts_per_page' => -1,
					'tax_query' => array(
					    array(
					    	'taxonomy' => Refine_Product::get_taxonomy(),
							'field' => 'term_id',
							'terms' => 3
					    )
					)
				);
				
				$products = new WP_Query( $args );
				$products_array = wp_list_pluck( $products->posts, 'post_title', 'ID' );
		    }

		    $result = null;

            ob_start();
			    require dirname( __FILE__ ) . '/html-template.php';
			    $result = ob_get_contents();
			ob_end_clean();

			return $result;

		}

		/**
		 * Handler instant quote
		 *
		 * @access public
		 * @return void
		 * @since 1.1
		 */
		public function get_instant_quote_hanlder() {
			
			$posted = array();
			$lead_id = 0;
			
			parse_str( $_POST['form'], $posted );

			$response = [
				'success' => false,
				'redirect' => false,
				'redirect_to' => null,
				'lead_id' => 0,
				'msg' => 'Falied!',
			];
			
			$form_type = ( isset( $posted['form_type'] ) ) ? $posted['form_type'] : 'default';

			$to = 'sales@refinepackaging.com';

			$headers = '';
			$headers .= "Reply-To: info@refinepackaging.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
			$subject = 'New Enquiry From  '.$posted['first_name'];
			$attachments = [];
			
			$redirect_to = 'https://refinepackaging.co.uk/thank-you-free-quote/?id=';

            $body = '<table>';
			
			if( $form_type == 'default' ){
				
				$subject = 'New Enquiry From  '.$posted['first_name'];
				
				$body .= "<tr><td>Product Name</td><td>". get_the_title( $posted['product_id'] )  ."</td></tr>";
				$body .= "<tr><td>First Name</td><td>".$posted['first_name']."</td></tr>";
				$body .= "<tr><td>Last Name</td><td>".$posted['last_name']."</td></tr>";
				$body .= "<tr><td>Email</td><td>".$posted['email']." </td></tr>";
				$body .= "<tr><td>Phone</td><td>".$posted['phone']." </td></tr>";
				$body .= "<tr><td>Message</td><td>".$posted['message']." </td></tr>";
				$body .= "<tr><td>Current Page URL</td><td>".$posted['url']." </td></tr>";
				
				$redirect_to = 'https://refinepackaging.co.uk/thank-you-free-quote/?id=';
				
			}
			
			if( $form_type == 'dieline' ){
				
				$subject = 'Dieline Requested by '.$posted['first_name'];
				
				$body .= "<tr><td>Form Type</td><td>Dieline</td></tr>";
				$body .= "<tr><td>Product Name</td><td>". get_the_title( $posted['product_id'] )  ."</td></tr>";
				$body .= "<tr><td>First Name</td><td>".$posted['first_name']."</td></tr>";
				$body .= "<tr><td>Last Name</td><td>".$posted['last_name']."</td></tr>";
				$body .= "<tr><td>Email</td><td>".$posted['email']." </td></tr>";
				$body .= "<tr><td>Length</td><td>".$posted['meta']['length']." </td></tr>";
				$body .= "<tr><td>Width</td><td>".$posted['meta']['width']." </td></tr>";
				$body .= "<tr><td>Depth</td><td>".$posted['meta']['depth']." </td></tr>";
				$body .= "<tr><td>Current Page URL</td><td>".$posted['url']." </td></tr>";		
				
				$redirect_to = 'https://refinepackaging.co.uk/thank-you-dieline/?id=';		
				
			}
			
			if( $form_type == 'submit_dieline' ){
				
				$subject = 'Dieline Submitted by '.$posted['first_name'];
				
				$body .= "<tr><td>Form Type</td><td>Submit Dieline</td></tr>";
				$body .= "<tr><td>First Name</td><td>".$posted['first_name']."</td></tr>";
				$body .= "<tr><td>Last Name</td><td>".$posted['last_name']."</td></tr>";
				$body .= "<tr><td>Email</td><td>".$posted['email']." </td></tr>";
				$body .= "<tr><td>Notes</td><td>".$posted['notes']." </td></tr>";
				$body .= "<tr><td>Current Page URL</td><td>".$posted['url']." </td></tr>";				
			
				$redirect_to = 'https://refinepackaging.co.uk/thank-you-submit-dieline/?id=';
				
				if ( ! function_exists( 'wp_handle_upload' ) ) {
					
				    require_once( ABSPATH . 'wp-admin/includes/file.php' );
				    
				}
				
				$uploadedfile = $_FILES['file'];
 
				$upload_overrides = array(
				    'test_form' => false
				);
				
				// Register our path override.
				add_filter( 'upload_dir', [ $this, 'submit_dieline_directory'] );
				
				$movefile = wp_handle_upload( $uploadedfile, $upload_overrides);
				
				// Set everything back to normal.
				remove_filter( 'upload_dir', [ $this, 'submit_dieline_directory'] );
				 
				if ( $movefile && ! isset( $movefile['error'] ) ) {
				    $attachments = array( $movefile['file'] );
				    $posted['meta']['submit_dieline_file'] = $movefile['file'];
				    $posted['meta']['submit_dieline_url'] = $movefile['url'];
				}
				
			}
			
			$body .= '</table>';
			
			$posted['type'] = $form_type;
			
			$lead_id = $this->leads->insert($posted, 'save_lead');
			
			foreach ((array) $posted['meta'] as $key => $item) {
				
				$__metadata = [
					'lead_id' => $lead_id,
					'meta_key' => $key,
					'meta_value' => $item,
				];
				
				$this->leadmeta->insert($__metadata, 'save_leadmeta_'.$key );
				
			}
			
			$mailResult = wp_mail( $to, $subject, $body, $headers, $attachments );

			$msg = 'The message was not sent.';
			$status = 'not sent';

			if ( $mailResult ) {
				$msg = 'The message was sent.';
				$status = 'sent';
			}

			$this->leads->update( $lead_id, ['status' => $status] );
			$posted['ID'] = strval($lead_id);
			$posted['status'] = $status;

			// $this->google_sheet->insert($posted);
			
			$response = [
				'success' => true,
				'redirect' => true,
				'redirect_to' => $redirect_to,
				'msg' => $msg,
				'lead_id' => $lead_id,
				'data' => $posted
			];
			
			wp_send_json($response);
		}
		
	}

	new Refine_SC_Instant_Quote();
}
