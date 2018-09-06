<?php

namespace Sireler\DesignPatterns\AbstractFactory;

/**
 * Input,
 * компонент семейства Mac
 *
 * Class MacInput
 * @package Sireler\DesignPatterns\AbstractFactory
 */
class MacInput implements Input
{
    public function draw()
    {
        echo "Отрисовано поле для ввода текста в стиле Mac";
    }
}