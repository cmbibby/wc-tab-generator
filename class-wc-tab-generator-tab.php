<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

class WC_Tab_Generator_Tab
{



	private $tab_title;
	private $template_part;
	private $tab_priority;
	private $acf_field;
	public function __construct($args)
	{
		$this->tab_title     = $args['tab_title'];
		$this->template_part = $args['template_part'];
		$this->tab_priority  = $args['priority'];
		$this->acf_field     = $args['acf_field'];
		add_filter(
			'woocommerce_product_tabs',
			function ($tabs) {
				$tabs[$this->tab_title] = array(
					'key' => str_replace(' ', '', $this->tab_title),
					'title'    => $this->tab_title,
					'priority' => $this->tab_priority,
					'callback' => array($this, 'tab_callback'),
				);
				return $tabs;
			}
		);
	}
	public function tab_callback()
	{
		if (!is_null($this->template_part)) {
			get_template_part('template-parts/' . $this->template_part);
		} else {
			if (get_field($this->acf_field, 'option')) {
				$tab_content = get_field($this->acf_field, 'option');
			} else {
				$tab_content = '<div>Please enter info in ' . $this->tab_title . ' (' . $this->acf_field . ') theme settings</div>';
			}
			echo $tab_content;
		}
	}
}