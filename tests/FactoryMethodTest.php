<?php

use PHPUnit\Framework\TestCase;
use Sireler\DesignPatterns\FactoryMethod\Developer\JSDeveloper;
use Sireler\DesignPatterns\FactoryMethod\Developer\PHPDeveloper;
use Sireler\DesignPatterns\FactoryMethod\Job;


final class FactoryMethodTest extends TestCase
{
    public function testJavascriptDeveloper()
    {
        $job = new Job('JavaScript');

        $this->assertInstanceOf(
            JSDeveloper::class, $job->developer
        );

        $this->assertEquals("JavaScript developer writes code!", $job->developer->writeCode());
    }

    public function testPhpDeveloper()
    {
        $job = new Job('PHP');

        $this->assertInstanceOf(
            PHPDeveloper::class, $job->developer
        );

        $this->assertEquals("PHP developer writes code", $job->developer->writeCode());
    }

    public function testUnknownDeveloper()
    {
        $this->expectException(\Exception::class);

        $job = new Job('Ruby');
    }
}