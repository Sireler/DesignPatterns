<?php

namespace Sireler\DesignPatterns\Singleton;

/**
 * Паттерн Singleton гарантирует, что у класса есть только один
 * экземпляр, и предоставляет к нему глобальную точку доступа.
 *
 * Class Singleton
 * @package Sireler\DesignPatterns
 */
class Singleton
{
    /**
     * Экземпляр объекта
     *
     * @var
     */
    private static $instance;

    /**
     * Метод получения экземпляра
     *
     * @return mixed
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Ограничение создания объекта
     */
    private function __construct() {}

    /**
     * Ограничение клонирования объекта
     */
    private function __clone() {}
}