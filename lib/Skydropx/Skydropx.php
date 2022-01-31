<?php
namespace Skydropx;

use Skydropx\Error as Errors;

/**
 * Class Skydropx
 *
 * @package Skydropx
 */
class Skydropx {
	protected $access;

	public $url_live = 'https://api.skydropx.com/';
	public $url_test = 'https://api-demo.skydropx.com/';
	public $version = 'v1';

	/**
	 * Constructor.
	 *
	 * @param array|null $options
	 *
	 * @throws Error\InvalidOptions
	 *
	 * @example array('api' => "{api}",
	 *					'mode' => "{mode}",
	 *				)
	 */
	public function __construct( $access ) {
		
		$this->access = (object) $access;
		if ( ! isset( $this->access->api ) ||
			! isset( $this->access->mode )
		) {
		  throw new Errors\InvalidOptions();
		}

		// URL access
		switch( $this->access->mode ) {
			case 'live' : $this->access->url = $this->url_live . $this->$version; break;
			default 	: $this->access->url = $this->url_test . $this->$version;
		}

		/*$this->Users = new Users( $this );
		$this->Products = new Products($this);
		$this->Deltas = new Deltas( $this );
		$this->Families = new Families( $this );
		$this->Warehouses = new Warehouses( $this );
		$this->Categories = new Categories( $this );
		$this->Brands = new Brands( $this );
		$this->Prices = new Prices( $this );
		$this->Orders = new Orders( $this );
		$this->Vouchers = new Vouchers( $this );*/

		$this->Shipments = new Shipments( $this );
	}

	public function GetAccess() {
		return $this->access;
	}
}

