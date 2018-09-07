<?php

namespace Sireler\DesignPatterns\FactoryMethod\Factory;

use Sireler\DesignPatterns\FactoryMethod\Developer\Developer;

/**
 * Создатель
 *
 * Объявляет фабричные метод,
 * возвращающий новые объекты
 * продуктов
 *
 * Interface DeveloperFactory
 * @package Sireler\DesignPatterns\FactoryMethod\Factory
 */
interface DeveloperFactory
{
    public function createDeveloper(): Developer;
}