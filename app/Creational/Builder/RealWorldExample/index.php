<?php

require_once "../../../../vendor/autoload.php";

use DesignPatterns\Creational\Builder\RealWorldExample\Builders\MysqlQueryBuilder;
use DesignPatterns\Creational\Builder\RealWorldExample\Builders\PostgresQueryBuilder;
use DesignPatterns\Creational\Builder\RealWorldExample\Client;

$client = new Client();

echo "Testing MySQL query builder:" . PHP_EOL;
$client->clientCode(new MysqlQueryBuilder());

echo PHP_EOL . PHP_EOL;

echo "Testing PostgresSQL query builder:" . PHP_EOL;
$client->clientCode(new PostgresQueryBuilder());
