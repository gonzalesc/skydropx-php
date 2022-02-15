<?php

namespace Skydropx;

/**
 * Class Orders
 *
 * @package Skydropx
 */
class Labels extends Resource {

	const URL_LABELS = "/labels";

	/**
	 * @param string|null $id
	 *
	 * @return post an order.
	 */
	public function create( $data = NULL ) {
		return $this->request( "POST", self::URL_LABELS, $this->skydropx->GetAccess(), $data );
	}
}
