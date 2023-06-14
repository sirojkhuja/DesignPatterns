<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Contracts\AbstractFactory;

class Client
{
    public function clientCode(AbstractFactory $factory): void
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . PHP_EOL;
        echo $productB->anotherUsefulFunctionB($productA) . PHP_EOL;
    }
}