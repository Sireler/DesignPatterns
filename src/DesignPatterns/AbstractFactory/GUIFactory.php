<?php

namespace Sireler\DesignPatterns\AbstractFactory;

/**
 * Интерфейс абстрактной фабрики,
 * определяющий типы создаваемых компонентов
 *
 * Interface GUIFactory
 * @package Sireler\DesignPatterns\AbstractFactory
 */
interface GUIFactory
{
    public function createButton(): Button;
    public function createInput(): Input;
}