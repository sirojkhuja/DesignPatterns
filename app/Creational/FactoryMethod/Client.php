<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Contracts\Creator;

class Client
{
    public function clientCode(Creator $creator): void
    {
        echo "Client: I'm not aware of the creator's class, but it still works.\n" . $creator->someOperation();
    }
}