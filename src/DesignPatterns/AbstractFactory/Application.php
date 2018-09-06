<?php

namespace Sireler\DesignPatterns\AbstractFactory;

/**
 * Клиентский код, использующий фабрику
 * Создает нужную фабрику, исходя из выбранной операционной системы
 *
 * Class Application
 * @package Sireler\DesignPatterns\AbstractFactory
 */
class Application
{
    /**
     * Операционная система
     *
     * @var string
     */
    private $os;

    /**
     * Абстрактная фабрика
     *
     * @var WinFactory
     */
    private $factory;

    /**
     * Компоненты UI
     *
     * @var
     */
    public $button;
    public $input;

    public function __construct(string $os = '')
    {
        $this->os = $os;

        switch ($os) {
            case 'Mac':
                $this->factory = new MacFactory();
                break;

            case 'Windows':
                $this->factory = new WinFactory();
                break;
            default:
                throw new \Exception('Невозможно запустить приложение! Неизвестная операционная система');
        }
    }

    /**
     * Создание компонентов UI фабрикой
     *
     * @return $this
     */
    public function createComponents()
    {
        $this->button = $this->factory->createButton();
        $this->input = $this->factory->createInput();

        return $this;
    }

    /**
     * Отрисовка компонентов UI
     */
    public function drawComponents()
    {
        $this->button->draw();
        $this->input->draw();
    }
}