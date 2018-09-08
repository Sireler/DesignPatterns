<?php

use PHPUnit\Framework\TestCase;
use Sireler\DesignPatterns\Builder\ExampleQueryBuilder;

final class BuilderTest extends TestCase
{
    public function testSelectWhere()
    {
        $queryBuilder = new ExampleQueryBuilder();

        $sql = $queryBuilder->select('cars')->where('model', 'Q8')->sql();

        $this->assertEquals("SELECT * FROM cars WHERE model = 'Q8';", $sql);
    }

    public function testSelectWhereAnd()
    {
        $queryBuilder = new ExampleQueryBuilder();

        $sql = $queryBuilder->select('cars')
            ->where('model', 'Q8')
            ->where('make', 'Audi')
            ->sql();

        $this->assertEquals("SELECT * FROM cars WHERE model = 'Q8' AND make = 'Audi';", $sql);
    }

    public function testSelectFields()
    {
        $queryBuilder = new ExampleQueryBuilder();

        $sql = $queryBuilder->select('cars', ['make', 'model'])->sql();

        $this->assertEquals('SELECT make, model FROM cars;', $sql);
    }
}