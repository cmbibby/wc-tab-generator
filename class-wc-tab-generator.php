<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
include_once(plugin_dir_path(__FILE__) . 'class-wc-tab-generator-tab.php');
class WC_Tab_Generator
{


	public static function CreateTab($args)
	{
		return new WC_Tab_Generator_Tab($args);
	}
}