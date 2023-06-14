<?php

namespace DesignPatterns\Creational\FactoryMethod\Creators;

use DesignPatterns\Creational\FactoryMethod\Contracts\Creator;
use DesignPatterns\Creational\FactoryMethod\Contracts\Product;
use DesignPatterns\Creational\FactoryMethod\Products\ConcreteProduct2;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}