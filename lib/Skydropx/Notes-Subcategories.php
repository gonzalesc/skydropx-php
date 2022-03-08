<?php

namespace Skydropx;

/**
 * Class Orders
 *
 * @package Skydropx
 */
class NotesSubcategories extends Resource {

	const URL_NOTES_SUBCATEGORIES = "/consignment_notes/categories/%d/subcategories";

	/**
	 * @param array|null $options
	 *
	 * @return get customers.
	 */
	public function get( $id = NULL ) {
		return $this->request( "GET", sprintf( self::URL_NOTES_SUBCATEGORIES, $id ), $this->skydropx->GetAccess() );
	}
}
