<?php

namespace DP\Structural\Adapter;

/**
 * class UtilsAdapter
 *
 */
class UtilsAdapter implements ToolsInterface{
    
    private $utils;
    
    public function __construct(UtilsInterface $utils) {
        $this->utils = $utils;
    }
    
    public function gen_slug() : string {
        return $this->utils->slugify();
    }
}
