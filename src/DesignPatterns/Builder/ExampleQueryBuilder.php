<?php

namespace Sireler\DesignPatterns\Builder;

/**
 * Пример реализации паттерна Builder
 *
 * Class ExampleQueryBuilder
 * @package Sireler\DesignPatterns\Builder
 */
class ExampleQueryBuilder implements QueryBuilder
{
    /**
     * Объект запроса
     *
     * @var
     */
    protected $query;

    /**
     * Очистить объект запроса
     */
    protected function clear()
    {
        $this->query = new \stdClass();
    }

    /**
     * Запрос типа select
     *
     * @param string $table
     * @param array $fields
     * @return QueryBuilder
     */
    public function select(string $table, array $fields = ['*']): QueryBuilder
    {
        $this->clear();
        $this->query->base = "SELECT " . implode(", ", $fields) . " FROM " . $table;
        $this->query->type = 'select';
        return $this;
    }

    /**
     * Условие для выборки
     *
     * @param string $field
     * @param string $value
     * @param string $operator
     * @return QueryBuilder
     */
    public function where(string $field, string $value, string $operator = '='): QueryBuilder
    {
        $this->query->where[] = "$field $operator '$value'";

        return $this;
    }

    /**
     * Вернуть SQL
     *
     * @return string
     */
    public function sql(): string
    {
        $query = $this->query;
        $sql = $query->base;
        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }

        $sql .= ";";

        return $sql;
    }
}