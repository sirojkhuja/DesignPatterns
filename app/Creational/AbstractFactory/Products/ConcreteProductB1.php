<?php

namespace DesignPatterns\Creational\AbstractFactory\Products;

use DesignPatterns\Creational\AbstractFactory\Contracts\AbstractProductA;
use DesignPatterns\Creational\AbstractFactory\Contracts\AbstractProductB;

class ConcreteProductB1 implements AbstractProductB
{

    public function usefulFunctionB(): string
    {
        return "The result of the product B1.";
    }

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}