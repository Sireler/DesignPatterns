<?php

namespace Sireler\DesignPatterns\FactoryMethod\Factory;

use Sireler\DesignPatterns\FactoryMethod\Developer\Developer;
use Sireler\DesignPatterns\FactoryMethod\Developer\PHPDeveloper;

/**
 * Реаллизует фабричный метод,
 * производя конкретные продукты
 *
 * Class PHPDeveloperFactory
 * @package Sireler\DesignPatterns\FactoryMethod\Factory
 */
class PHPDeveloperFactory implements DeveloperFactory
{
    public function createDeveloper(): Developer
    {
        return new PHPDeveloper();
    }
}