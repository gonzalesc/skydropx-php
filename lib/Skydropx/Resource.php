<?php

namespace Skydropx;

/**
 * Class Resource
 *
 * @package Skydropx
 */
class Resource extends Client {

    /**
     * Constructor.
     */
    public function __construct( $skydropx )
    {
        $this->skydropx = $skydropx;
    }

}
