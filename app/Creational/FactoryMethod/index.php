<?php

require_once "../../../vendor/autoload.php";

use DesignPatterns\Creational\FactoryMethod\Client;
use DesignPatterns\Creational\FactoryMethod\Creators\ConcreteCreator1;
use DesignPatterns\Creational\FactoryMethod\Creators\ConcreteCreator2;

$clientApp = new Client();

echo "App: Launched with ConcreteCreator1." . PHP_EOL;
$clientApp->clientCode(new ConcreteCreator1());
echo PHP_EOL . PHP_EOL;

echo "App: Launched with ConcreteCreator2." . PHP_EOL;
$clientApp->clientCode(new ConcreteCreator2());
