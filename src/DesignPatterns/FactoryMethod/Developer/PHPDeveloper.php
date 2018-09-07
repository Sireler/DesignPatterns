<?php

namespace Sireler\DesignPatterns\FactoryMethod\Developer;

/**
 * Конкретный класс продукта,
 * реализующий интерфейс
 *
 * Class PHPDeveloper
 * @package Sireler\DesignPatterns\FactoryMethod\Developer
 */
class PHPDeveloper implements Developer
{
    public function writeCode()
    {
        return "PHP developer writes code";
    }
}