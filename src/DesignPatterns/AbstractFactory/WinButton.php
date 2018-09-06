<?php

namespace Sireler\DesignPatterns\AbstractFactory;

/**
 * Кнопка,
 * компонент семейства Windows
 *
 * Class WinButton
 * @package Sireler\DesignPatterns\AbstractFactory
 */
class WinButton implements Button
{
    public function draw()
    {
        echo "Отрисована кнопка в стиле Windows";
    }
}