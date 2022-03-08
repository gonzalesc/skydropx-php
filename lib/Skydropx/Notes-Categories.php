<?php

namespace Skydropx;

/**
 * Class Orders
 *
 * @package Skydropx
 */
class NotesCategories extends Resource {

	const URL_NOTES_CATEGORIES = "/consignment_notes/categories";

	/**
	 * @param array|null $options
	 *
	 * @return get customers.
	 */
	public function get() {
		return $this->request( "GET", self::URL_NOTES_CATEGORIES, $this->skydropx->GetAccess() );
	}
}
