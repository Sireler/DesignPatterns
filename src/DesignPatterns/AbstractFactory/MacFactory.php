<?php

namespace Sireler\DesignPatterns\AbstractFactory;

/**
 * Фабрика, создающая элементы UI
 *
 * Class MacFactory
 * @package Sireler\DesignPatterns\AbstractFactory
 */
class MacFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createInput(): Input
    {
        return new MacInput();
    }
}