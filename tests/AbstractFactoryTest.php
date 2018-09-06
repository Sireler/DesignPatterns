<?php

use PHPUnit\Framework\TestCase;
use Sireler\DesignPatterns\AbstractFactory\Application;
use Sireler\DesignPatterns\AbstractFactory\UnknownOSException;

final class AbstractFactoryTest extends TestCase
{
    public function testUnknownOSException()
    {
        $this->expectException(UnknownOSException::class);

        $app = new Application('Dinux');
    }

    public function testWindowsUI()
    {
        $this->expectOutputString('Отрисована кнопка в стиле WindowsОтрисовано поле для ввода текста в стиле Windows');

        $app = new Application('Windows');
        $app->createComponents()
            ->drawComponents();
    }

    public function testMacUI()
    {
        $this->expectOutputString('Отрисована кнопка в стиле MacОтрисовано поле для ввода текста в стиле Mac');

        $app = new Application('Mac');
        $app->createComponents()
            ->drawComponents();
    }

    public function testMacFactory()
    {
        $app = new Application('Mac');
        $app->createComponents();

        $this->assertInstanceOf(\Sireler\DesignPatterns\AbstractFactory\MacButton::class, $app->button);
        $this->assertInstanceOf(\Sireler\DesignPatterns\AbstractFactory\MacInput::class, $app->input);
    }

    public function testWindowsFactory()
    {
        $app = new Application('Windows');
        $app->createComponents();

        $this->assertInstanceOf(\Sireler\DesignPatterns\AbstractFactory\WinButton::class, $app->button);
        $this->assertInstanceOf(\Sireler\DesignPatterns\AbstractFactory\WinInput::class, $app->input);
    }
}