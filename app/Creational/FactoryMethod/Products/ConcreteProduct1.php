<?php

namespace DesignPatterns\Creational\FactoryMethod\Products;

use DesignPatterns\Creational\FactoryMethod\Contracts\Product;

class ConcreteProduct1 implements Product
{

    public function operation(): string
    {
        return "{Result of ConcreteProduct1}";
    }
}