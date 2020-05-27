<?php

namespace musa11971\TVDB;

use Carbon\Carbon;

class Updates
{
	public $updates = [];

	public function __construct( $data )
	{
		foreach ( $data as $show_update ) {
			$this->updates[ $show_update->id ] = Carbon::parse( $show_update->lastUpdated );
		}
	}
}
