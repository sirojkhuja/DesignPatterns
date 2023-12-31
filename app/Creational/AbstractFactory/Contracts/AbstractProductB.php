<?php

namespace DesignPatterns\Creational\AbstractFactory\Contracts;

interface AbstractProductB
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}