<?php

namespace DP\Creational\Builder\Test;

use PHPUnit\Framework\TestCase;
use DP\Creational\Builder\Director;
use DP\Creational\Builder\JpegBuilder;
use DP\Creational\Builder\PngBuilder;
use DP\Creational\Builder\Image;
use DP\Creational\Builder\PngImage;
use DP\Creational\Builder\JpegImage;

class BuilderTest extends TestCase {

    public function testJpegBuilder() {
        $director = new Director();
        $jpeg = $director->build(new JpegBuilder());
        $this->assertInstanceOf(Image::class, $jpeg);
        $this->assertInstanceOf(JpegImage::class, $jpeg);
    }

    public function testPngBuilder() {
        $director = new Director();
        $png = $director->build(new PngBuilder());
        $this->assertInstanceOf(Image::class, $png);
        $this->assertInstanceOf(PngImage::class, $png);
    }
    
}
