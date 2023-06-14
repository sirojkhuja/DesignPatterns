<?php

namespace DesignPatterns\Creational\Builder\ConceptualExample\Builders;

use DesignPatterns\Creational\Builder\ConceptualExample\Contracts\Builder;
use DesignPatterns\Creational\Builder\ConceptualExample\Products\Product1;

class ConcreteBuilder1 implements Builder
{
    private Product1 $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product1();
    }

    public function producePartA(): void
    {
        $this->product->parts[] = 'PartA1';
    }

    public function producePartB(): void
    {
        $this->product->parts[] = 'PartB1';
    }

    public function producePartC(): void
    {
        $this->product->parts[] = 'PartC1';
    }

    public function getProduct(): Product1
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}