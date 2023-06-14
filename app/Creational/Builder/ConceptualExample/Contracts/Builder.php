<?php

namespace DesignPatterns\Creational\Builder\ConceptualExample\Contracts;

interface Builder
{
    public function producePartA(): void;

    public function producePartB(): void;

    public function producePartC(): void;
}