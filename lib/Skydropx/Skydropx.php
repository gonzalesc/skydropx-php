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
	 * @example array(
	 *          	'api_key' => "{api_key}",
	 *				'mode' => "{mode}",
	 *			)
	 */
	public function __construct( $access ) {
		
		$this->access = (object) $access;
		if ( ! isset( $this->access->api_key ) ||
			! isset( $this->access->mode )
		) {
		  throw new Errors\InvalidOptions();
		}

		// URL access
		switch( $this->access->mode ) {
			case 'live' : $this->access->url = $this->url_live . $this->version; break;
			default 	: $this->access->url = $this->url_test . $this->version;
		}

		$this->Shipments 			= new Shipments( $this );
		$this->Labels 				= new Labels( $this );
		$this->NotesCategories 		= new NotesCategories( $this );
		$this->NotesSubcategories	= new NotesSubcategories( $this );
		$this->NotesClasses			= new NotesClasses( $this );
		$this->NotesPackagings 		= new NotesPackagings( $this );
	}

	public function GetAccess() {
		return $this->access;
	}
}

