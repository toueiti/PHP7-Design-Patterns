<?php

namespace DP\Behavioral\Strategy;

/**
 * Exporter un tableau de données au format XML.
 *
 */
class XmlOutput implements OutputInterface{
    
    public function output($data) {
        return arrayToXml($data);
    }
    
    function arrayToXml($data) {
        $xml = '';
        foreach ($data as $key=>$value) {
            $xml .= "<$key>" . htmlspecialchars(trim($value)) . "</$key>";
        }
        return $xml;
    }
}
