<?php

namespace DP\Behavioral\Strategy;

/**
 * permet d'exporter un tableau de données au format json.
 *
 */
class JsonOutput implements OutputInterface{
    
    public function output($data)
    {
        return json_encode($data);
    }
}
