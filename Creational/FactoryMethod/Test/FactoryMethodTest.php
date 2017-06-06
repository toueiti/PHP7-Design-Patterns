<?php

namespace DP\Creational\FactoryMethod\Test;

use DP\Creational\FactoryMethod\FactoryMethod;
use DP\Creational\FactoryMethod\JpegFactory;
use DP\Creational\FactoryMethod\PngFactory;
use DP\Creational\FactoryMethod\JpegImage;
use DP\Creational\FactoryMethod\PngImage;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCreateJpegImage() 
    {
        $factory = new JpegFactory;
        $jpeg = $factory->create();
        
        $this->assertInstanceOf(JpegImage::class, $jpeg);
    }
    
    public function testCreatePngImage() 
    {
        $factory = new PngFactory();
        $png = $factory->create();
        
        $this->assertInstanceOf(PngImage::class, $png);
    }
}
