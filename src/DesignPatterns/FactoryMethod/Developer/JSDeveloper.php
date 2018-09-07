<?php

namespace Sireler\DesignPatterns\FactoryMethod\Developer;

/**
 * Конкретный класс продукта,
 * реализующий интерфейс
 *
 * Class JSDeveloper
 * @package Sireler\DesignPatterns\FactoryMethod\Developer
 */
class JSDeveloper implements Developer
{
    public function writeCode()
    {
        return "JavaScript developer writes code!";
    }
}