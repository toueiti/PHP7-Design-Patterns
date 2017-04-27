<?php

namespace DP\Behavioral\Observer;


class ProductObserver implements \SplObserver{
    /**
     * @var User[]
     */
    private $products = [];
    
    /**
     * fonction appelée par SplSubject::notify()
     *
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        $this->products[] = clone $subject;
    }
    
    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}
