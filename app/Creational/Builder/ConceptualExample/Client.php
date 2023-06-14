<?php

namespace DesignPatterns\Creational\Builder\ConceptualExample;

use DesignPatterns\Creational\Builder\ConceptualExample\Builders\ConcreteBuilder1;

class Client
{
    public function clientCode(Director $director): void
    {
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        echo "Standard basic product:\n";
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        echo "Standard full featured product:\n";
        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        echo "Custom product:\n";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }
}