<?php

namespace Skydropx;

/**
 * Class Orders
 *
 * @package Skydropx
 */
class NotesPackagings extends Resource {

	const URL_NOTES_PACKAGINGS = "/consignment_notes/packagings";

	/**
	 * @param array|null $options
	 *
	 * @return get customers.
	 */
	public function get() {
		return $this->request( "GET", self::URL_NOTES_PACKAGINGS, $this->skydropx->GetAccess() );
	}
}
