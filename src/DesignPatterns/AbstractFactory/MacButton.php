<?php

namespace Sireler\DesignPatterns\AbstractFactory;

/**
 * Кнопка,
 * компонент семейства Mac
 *
 * Class MacButton
 * @package Sireler\DesignPatterns\AbstractFactory
 */
class MacButton implements Button
{
    public function draw()
    {
        echo "Отрисована кнопка в стиле Mac";
    }
}