<?php

namespace DesignPatterns\Creational\FactoryMethod\Creators;

use DesignPatterns\Creational\FactoryMethod\Contracts\Creator;
use DesignPatterns\Creational\FactoryMethod\Contracts\Product;
use DesignPatterns\Creational\FactoryMethod\Products\ConcreteProduct1;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}