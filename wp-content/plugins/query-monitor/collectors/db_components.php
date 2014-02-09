<?php
/*
Copyright 2014 John Blackbourn

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/

class QM_Collector_DB_Components extends QM_Collector {

	public $id = 'db_components';

	public function name() {
		return __( 'Queries by Component', 'query-monitor' );
	}

	public function __construct() {
		parent::__construct();
	}

	public function process() {

		if ( $dbq = QueryMonitor::get_collector( 'db_queries' ) ) {
			if ( isset( $dbq->data['component_times'] ) ) {
				$this->data['times'] = $dbq->data['component_times'];
			}
			if ( isset( $dbq->data['types'] ) ) {
				$this->data['types'] = $dbq->data['types'];
			}
		}

	}

}

function register_qm_collector_db_components( array $qm ) {
	$qm['db_components'] = new QM_Collector_DB_Components;
	return $qm;
}

add_filter( 'query_monitor_collectors', 'register_qm_collector_db_components', 40 );
