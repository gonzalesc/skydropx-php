<?php

namespace Skydropx;

/**
 * Class Orders
 *
 * @package Skydropx
 */
class Shipments extends Resource {

	const URL_SHIPMENTS = "/shipments";

	/**
	 * @param string|null $id
	 *
	 * @return post an order.
	 */
	public function create( $data = NULL ) {
		return $this->request( "POST", self::URL_SHIPMENTS, $this->skydropx->GetAccess(), $data );
	}
}
