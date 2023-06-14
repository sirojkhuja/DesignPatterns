<?php

namespace DesignPatterns\Creational\Builder\ConceptualExample;

use DesignPatterns\Creational\Builder\ConceptualExample\Contracts\Builder;

class Director
{
    private Builder $builder;

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinimalViableProduct(): void
    {
        $this->builder->producePartA();
    }

    public function buildFullFeaturedProduct(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }
}