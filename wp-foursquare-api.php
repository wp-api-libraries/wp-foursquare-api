<?php
/**
 * WP FourSquare API (https://developer.foursquare.com/docs/)
 *
 * @package WP-FourSquare-API
 */
/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! class_exists( 'ZendeskHelpCenterAPI' ) ) {
	
	/**
	 * FourSquareAPI Class.
	 */
	class FourSquareAPI {
		
		/**
		 * API Key.
		 *
		 * @var string
		 */
		static private $api_key;
		
		/**
		 * __construct function.
		 *
		 * @access public
		 * @param mixed $api_key API Key.
		 * @return void
		 */
		public function __construct( $api_key ) {
			static::$api_key = $api_key;
		}
		
		/**
		 * Fetch the request from the API.
		 *
		 * @access private
		 * @param mixed $request Request URL.
		 * @return $body Body.
		 */
		private function fetch( $request ) {
			$response = wp_remote_get( $request );
			$code = wp_remote_retrieve_response_code( $response );
			if ( 200 !== $code ) {
				return new WP_Error( 'response-error', sprintf( __( 'Server response code: %d', 'wp-foursquare-api' ), $code ) );
			}
			$body = wp_remote_retrieve_body( $response );
			return json_decode( $body );
		}
		
		
		
		/* OAUTH. */
		
		/* USERS. */
		
		public function get_user_checkins( $user_id, $limit, $offset, $sort, $after_timestamp, $before_timestamp ) {
			
		}
		
		/**
		 * Get User Mayorship (https://developer.foursquare.com/docs/users/mayorships).
		 * 
		 * @access public
		 * @param mixed $user_id User ID.
		 * @return void
		 */
		public function get_user_mayorships( $user_id ) {
			// https://api.foursquare.com/v2/users/USER_ID/mayorships
		}
		
		/* VENUES. */
		
		/* VENUEGROUPS. */
		
		/* CHECKINS. */
		
		public function create_checkin( $venue_id, $event_id, $shout, $mentions, $broadcast, $latitude, $longitude, $ll_accuracy, $altitude, $altitude_accuracy ) {
			// https://api.foursquare.com/v2/checkins/add
		}
		
		/* TIPS. */
		
		/* LISTS. */
		
		/* UPDATES. */
		
		/* PHOTOS. */
		
		/* SETTINGS. */
		
		/* SPECIALS. */
		
		/* EVENTS. */
		
		/* PAGES. */
		
		/* PAGEUPDATES. */
		
		/* MULTI. */
		
	}
}