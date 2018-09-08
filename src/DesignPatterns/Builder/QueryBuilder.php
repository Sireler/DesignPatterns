<?php

namespace Sireler\DesignPatterns\Builder;

/**
 * Объявляет шаги конструирования объекта
 *
 * Interface QueryBuilder
 * @package Sireler\DesignPatterns\Builder
 */
interface QueryBuilder
{
    /**
     * Запрос типа select
     *
     * @param string $table
     * @param array $fields
     * @return QueryBuilder
     */
    public function select(string $table, array $fields = ['*']): QueryBuilder;

    /**
     * Условие для выборки
     *
     * @param string $field
     * @param string $value
     * @param string $operator
     * @return QueryBuilder
     */
    public function where(string $field, string $value, string $operator = '='): QueryBuilder;

    /**
     * Вернуть SQL запроса
     *
     * @return string
     */
    public function sql(): string;
}