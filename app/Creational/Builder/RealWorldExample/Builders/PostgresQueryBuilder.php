<?php

namespace DesignPatterns\Creational\Builder\RealWorldExample\Builders;

use DesignPatterns\Creational\Builder\RealWorldExample\Contracts\SQLQueryBuilder;

/**
 * Class PostgresQueryBuilder
 * @package DesignPatterns\Creational\Builder\RealWorldExample\Builders
 */
class PostgresQueryBuilder extends MysqlQueryBuilder
{
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}