<?php

namespace Rarst\Laps;

class Genesis_Events extends Laps_Events {

	protected function is_applicable() {

		return function_exists( 'genesis' );
	}

	protected function get_events() {

		$events = array();

		$events['genesis_before_header'][10] = array(
			'event'    => 'Header',
			'category' => 'theme',
		);

		$events['genesis_after_header'][10] = array(
			'action'   => 'stop',
			'event'    => 'Header',
			'category' => 'theme',
		);

		$events['genesis_before_sidebar_widget_area'][10] = array(
			'event'    => 'Sidebar',
			'category' => 'theme',
		);

		$events['genesis_after_sidebar_widget_area'][10] = array(
			'action'   => 'stop',
			'event'    => 'Sidebar',
			'category' => 'theme',
		);

		$events['genesis_before_sidebar_alt_widget_area'][10] = array(
			'event'    => 'Sidebar (alternate)',
			'category' => 'theme',
		);

		$events['genesis_after_sidebar_alt_widget_area'][10] = array(
			'action'   => 'stop',
			'event'    => 'Sidebar (alternate)',
			'category' => 'theme',
		);

		return $events;
	}
}