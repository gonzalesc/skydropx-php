<?php

namespace Skydropx;

use Skydropx\Error as Errors;

/**
 * Class Client
 *
 * @package Skydropx
 */
class Client {
	public function request( $method, $path, $access, $data = NULL) {
		try {

			$url = $access->url . $path;
			
			$headers = [
				'Authorization'		=> sprintf( 'Bearer %s', $access->api_key ),
				'Content-Type'		=> 'application/json',
				'Accept'			=> 'application/json',
				'Accept-Encoding'	=> '*',
			];
			
			$options = [ 'timeout' => 120 ]; 

			if( $method == "GET" ) {

				//$url = ! empty( $data ) ? $url . '?' . http_build_query( $data ) : $url;
				$response = \Requests::get( $url, $headers, $options );
				
			} else if($method == "POST") {
				$response = \Requests::post( $url, $headers, json_encode( $data ), $options );
			} else if($method == "PATCH") {
				$response = \Requests::patch( $url, $headers, json_encode( $data ), $options );
			} else if($method == "DELETE") {
				$response = \Requests::delete( $url, $headers, $options );
			}

		} catch (\Exception $e) {
			throw new Errors\UnableToConnect();
		}
		if ($response->status_code >= 200 && $response->status_code <= 206) {
			return json_decode($response->body);
		}
		if ($response->status_code == 400) {
			throw new Errors\UnhandledError($response->body, $response->status_code);
		}
		if ($response->status_code == 401) {
			throw new Errors\AuthenticationError();
		}
		if ($response->status_code == 404) {
			throw new Errors\NotFound();
		}
		if ($response->status_code == 403) {
			throw new Errors\InvalidOptions();
		}
		if ($response->status_code == 405) {
			throw new Errors\MethodNotAllowed();
		}
		throw new Errors\UnhandledError($response->body, $response->status_code);
	}
}
