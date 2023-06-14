<?php

namespace DesignPatterns\Creational\AbstractFactory\Factories;

use DesignPatterns\Creational\AbstractFactory\Contracts\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Contracts\AbstractProductA;
use DesignPatterns\Creational\AbstractFactory\Contracts\AbstractProductB;
use DesignPatterns\Creational\AbstractFactory\Products\ConcreteProductA2;
use DesignPatterns\Creational\AbstractFactory\Products\ConcreteProductB2;

class ConcreteFactory2 implements AbstractFactory
{

    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}