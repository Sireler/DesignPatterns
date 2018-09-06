<?php

namespace Sireler\DesignPatterns\AbstractFactory;

/**
 * Поле для ввода текста,
 * компонент семейства Windows
 *
 * Class WinInput
 * @package Sireler\DesignPatterns\AbstractFactory
 */
class WinInput implements Input
{
    public function draw()
    {
        echo "Отрисовано поле для ввода текста в стиле Windows";
    }
}