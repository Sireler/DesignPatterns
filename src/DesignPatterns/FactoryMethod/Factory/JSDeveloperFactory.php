<?php

namespace Sireler\DesignPatterns\FactoryMethod\Factory;

use Sireler\DesignPatterns\FactoryMethod\Developer\Developer;
use Sireler\DesignPatterns\FactoryMethod\Developer\JSDeveloper;

/**
 * Реаллизует фабричный метод,
 * производя конкретные продукты
 *
 * Class JSDeveloperFactory
 * @package Sireler\DesignPatterns\FactoryMethod\Factory
 */
class JSDeveloperFactory implements DeveloperFactory
{
    public function createDeveloper(): Developer
    {
        return new JSDeveloper();
    }
}