<?php

namespace Sireler\DesignPatterns\AbstractFactory;

/**
 * Паттерн предполагает, что мы имеем несколько
 * компонентов, находящихся в отдельных
 * иерархиях классов
 *
 * Компоненты одного семейства имеют одинаковый интерфейс
 *
 * Interface Input
 * @package Sireler\DesignPatterns\AbstractFactory
 */
interface Input
{
    public function draw();
}