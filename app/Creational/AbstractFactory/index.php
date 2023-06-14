<?php

require_once "../../../vendor/autoload.php";

use DesignPatterns\Creational\AbstractFactory\Client;
use DesignPatterns\Creational\AbstractFactory\Factories\ConcreteFactory1;
use DesignPatterns\Creational\AbstractFactory\Factories\ConcreteFactory2;

$clientApp = new Client();

echo "Client: Testing client code with the first factory type:" . PHP_EOL;
$clientApp->clientCode(new ConcreteFactory1());

echo PHP_EOL;

echo "Client: Testing the same client code with the second factory type:" . PHP_EOL;
$clientApp->clientCode(new ConcreteFactory2());
