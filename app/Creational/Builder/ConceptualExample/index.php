<?php

require_once "../../../../vendor/autoload.php";

use DesignPatterns\Creational\Builder\ConceptualExample\Client;
use DesignPatterns\Creational\Builder\ConceptualExample\Director;

$client = new Client();

$director = new Director();
$client->clientCode($director);