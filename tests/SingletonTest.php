<?php

use PHPUnit\Framework\TestCase;
use Sireler\DesignPatterns\Singleton;

final class SingletonTest extends TestCase
{
    public function testGetInstance()
    {
        $this->assertInstanceOf(
            Singleton::class, Singleton::getInstance()
        );
    }
}