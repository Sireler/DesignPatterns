<?php

namespace Sireler\DesignPatterns\AbstractFactory;

/**
 * Фабрика, создающая элементы UI
 *
 * Class MacFactory
 * @package Sireler\DesignPatterns\AbstractFactory
 */
class WinFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createInput(): Input
    {
        return new WinInput();
    }
}