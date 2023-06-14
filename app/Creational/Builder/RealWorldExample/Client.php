<?php

namespace DesignPatterns\Creational\Builder\RealWorldExample;

use DesignPatterns\Creational\Builder\RealWorldExample\Contracts\SQLQueryBuilder;

/**
 * Class Client
 * @package DesignPatterns\Creational\Builder\RealWorldExample
 */
class Client
{
    /**
     * @param SQLQueryBuilder $queryBuilder
     * @return void
     */
    public function clientCode(SQLQueryBuilder $queryBuilder): void
    {
        $query = $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->limit(10, 20)
            ->getSQL();

        echo $query;
    }
}