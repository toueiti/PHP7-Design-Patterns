<?php

namespace DP\Structural\Adapter\Test;

use DP\Structural\Adapter\Tools;
use DP\Structural\Adapter\ToolsInterface;
use DP\Structural\Adapter\Utils;
use DP\Structural\Adapter\UtilsInterface;
use DP\Structural\Adapter\UtilsAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase{
    
    public function testTools() {
        $tools = new Tools('Réseau sans fil');
        $this->assertEquals('reseau-sans-fil', $tools->gen_slug());
    }
    
    public function testUtils() {
        $utils = new Utils('Réseau sans fil');
        $tools = new UtilsAdapter($utils);
        $this->assertEquals('reseau-sans-fil', $tools->gen_slug());
    }
}
