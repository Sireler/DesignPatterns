<?php

require_once __DIR__ . '/vendor/autoload.php';

$singleton = Sireler\DesignPatterns\Singleton\Singleton::getInstance();

$queryBuilder = new \Sireler\DesignPatterns\Builder\ExampleQueryBuilder();
