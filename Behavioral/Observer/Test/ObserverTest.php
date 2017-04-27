<?php

namespace DP\Behavioral\Observer\Test;

use DP\Behavioral\Observer\Product;
use DP\Behavioral\Observer\ProductObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase{
    
    public function testObserver()
    {
        $product = new Product('TV');
        $observer = new ProductObserver();
        $product->attach($observer);
        $product->updateName('PC');
        
        $this->assertCount(1, $observer->getProducts());
    }
    
}
