<?php

namespace DesignPatterns\Creational\AbstractFactory\Factories;

use DesignPatterns\Creational\AbstractFactory\Contracts\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Contracts\AbstractProductA;
use DesignPatterns\Creational\AbstractFactory\Contracts\AbstractProductB;
use DesignPatterns\Creational\AbstractFactory\Products\ConcreteProductA1;
use DesignPatterns\Creational\AbstractFactory\Products\ConcreteProductB1;

class ConcreteFactory1 implements AbstractFactory
{

    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}