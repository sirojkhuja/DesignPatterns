<?php

namespace DesignPatterns\Creational\AbstractFactory\Contracts;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}