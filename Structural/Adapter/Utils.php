<?php

namespace DP\Structural\Adapter;

/**
 * class of Slugger
 */
class Utils implements UtilsInterface
{
    private $uri;
    
    public function __construct($uri) {
        $this->uri = $uri;
    }
    
    /**
     *
     * @return string
     */
    public function slugify() : string
    {
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $this->uri);
	$clean = preg_replace("/[^a-zA-Z0-9| -]/", '', $clean);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[_| -]+/", '-', $clean);
	return $clean;
    }
}
