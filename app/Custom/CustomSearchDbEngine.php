<?php

namespace App\Custom;

use Laravel\Scout\Builder;
use Laravel\Scout\Engines\DatabaseEngine;

/* 
    Customize DB Search Laravel Scout 
    Multiple Word Search
    L4rp!e
    src = https://stackoverflow.com/questions/78316714/search-for-multiple-words-in-laravel-scout
*/
class CustomSearchDbEngine extends DatabaseEngine
{
    protected function initializeSearchQuery(Builder $builder, array $columns, array $prefixColumns = [], array $fullTextColumns = [])
    {
        if (blank($builder->query)) {
            return $builder->model->newQuery();
        }

        return $builder->model->newQuery()->where(function ($query) use ($builder, $columns, $prefixColumns, $fullTextColumns) {
            $connectionType = $builder->model->getConnection()->getDriverName();

            $canSearchPrimaryKey = ctype_digit($builder->query) &&
                in_array($builder->model->getKeyType(), ['int', 'integer']) &&
                ($connectionType != 'pgsql' || $builder->query <= PHP_INT_MAX) &&
                in_array($builder->model->getKeyName(), $columns);

            if ($canSearchPrimaryKey) {
                $query->orWhere($builder->model->getQualifiedKeyName(), $builder->query);
            }

            $likeOperator = $connectionType == 'pgsql' ? 'ilike' : 'like';

            foreach ($columns as $column) {
                if (in_array($column, $fullTextColumns)) {
                    $query->orWhereFullText(
                        $builder->model->qualifyColumn($column),
                        $builder->query,
                        $this->getFullTextOptions($builder)
                    );
                } else {
                    if ($canSearchPrimaryKey && $column === $builder->model->getKeyName()) {
                        continue;
                    }

                    // START OF MODIFICATIONS

                    // 1. Split the incoming search query by whitespace
                    $keywords = explode(" ", $builder->query);

                    // 2. Trim each resultant keyword from whitespace and carriage return characters
                    $keywords = array_map(function($keyword) {
                        return trim($keyword);
                    }, $keywords);

                    // 3. Re-join these keywords together and use the % operator so that MySQL interprets it
                    $searchQuery = implode("%", $keywords);

                    // 4. Pass the modified version of the search query to the orWhere() method
                    $query->orWhere(
                        $builder->model->qualifyColumn($column),
                        $likeOperator,
                        in_array($column, $prefixColumns) ? $searchQuery.'%' : '%'.$searchQuery.'%',
                    );

                    // END OF MODIFICATIONS
                }
            }
        });
    }
}