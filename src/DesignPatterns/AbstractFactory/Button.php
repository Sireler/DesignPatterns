<?php

namespace Sireler\DesignPatterns\AbstractFactory;

/**
 * Паттерн предполагает, что мы имеем несколько
 * компонентов, находящихся в отдельных
 * иерархиях классов
 *
 * Компоненты одного семейства имеют одинаковый интерфейс
 *
 * Interface Button
 * @package Sireler\DesignPatterns\AbstractFactory
 */
interface Button
{
    public function draw();
}