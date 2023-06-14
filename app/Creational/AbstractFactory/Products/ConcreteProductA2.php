<?php

namespace DesignPatterns\Creational\AbstractFactory\Products;

use DesignPatterns\Creational\AbstractFactory\Contracts\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA
{

    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}