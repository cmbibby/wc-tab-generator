<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class WC_Tab_Generator {


	public static function CreateTab( $args ) {
		return new WC_Tab_Generator_Tab( $args );
	}
}
