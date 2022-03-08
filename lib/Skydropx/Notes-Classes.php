<?php

namespace Skydropx;

/**
 * Class Orders
 *
 * @package Skydropx
 */
class NotesClasses extends Resource {

	const URL_NOTES_CLASSES = "consignment_notes/subcategories/%d/classes";

	/**
	 * @param array|null $options
	 *
	 * @return get customers.
	 */
	public function get( $id = NULL ) {
		return $this->request( "GET", sprintf( self::URL_NOTES_CLASSES, $id ), $this->skydropx->GetAccess() );
	}
}
