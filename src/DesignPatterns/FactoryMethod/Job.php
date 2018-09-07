<?php

namespace Sireler\DesignPatterns\FactoryMethod;

use Sireler\DesignPatterns\FactoryMethod\Factory\DeveloperFactory;
use Sireler\DesignPatterns\FactoryMethod\Factory\JSDeveloperFactory;
use Sireler\DesignPatterns\FactoryMethod\Factory\PHPDeveloperFactory;

/**
 * Клиентский код,
 * создает определенную фабрику
 * в зависимости от нужного разработчика
 *
 * Class Job
 * @package Sireler\DesignPatterns\FactoryMethod
 */
class Job
{
    protected $factory;
    public $developer;

    public function __construct($developer)
    {
        $this->factory = $this->createDeveloperFactory($developer);
        $this->developer = $this->factory->createDeveloper();
    }

    public function createDeveloperFactory($developer): DeveloperFactory
    {
        $developer = strtolower($developer);

        switch ($developer) {
            case 'javascript':
                return new JSDeveloperFactory();
                break;
            case 'php':
                return new PHPDeveloperFactory();
                break;
        }
    }
}