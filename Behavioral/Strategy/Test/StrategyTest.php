<?php

namespace DP\Behavioral\Strategy\Test;

use DP\Behavioral\Strategy\OutputInterface;
use DP\Behavioral\Strategy\JsonOutput;
use DP\Behavioral\Strategy\XmlOutput;
use DP\Behavioral\Strategy\Parameter;
use PHPUnit\Framework\TestCase;

/**
 * class of StrategyTest *
 */
class StrategyTest extends TestCase {
    
    public function testJsonOutput() {
        $conf = new Parameter(new JsonOutput());
        $conf->addParam('ip', '40.50.60.70');
        $conf->addParam('port', '21');
        $conf->addParam('username', 'toto');
        $this->assertJson($conf->export());
        $this->assertJsonStringEqualsJsonString($conf->export(), 
                '{"ip":"40.50.60.70", "port": "21", "username":"toto"}');
    }  
    
    public function testXmlOutput() {
        $conf = new Parameter(new XmlOutput());
        $conf->addParam('ip', '40.50.60.70');
        $conf->addParam('port', '21');
        $conf->addParam('username', 'toto');
        $this->assertXmlStringEqualsXmlString($conf->export(), 
                "<data>
                    <ip>40.50.60.70</ip>
                    <port>21</port>
                    <username>toto</username>
                </data>");
    }
}
