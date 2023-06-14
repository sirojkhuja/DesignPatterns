<?php

namespace DesignPatterns\Creational\Builder\ConceptualExample\Products;

class Product1
{
    public array $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . PHP_EOL . PHP_EOL;
    }
}