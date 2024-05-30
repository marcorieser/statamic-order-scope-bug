<?php

namespace App\Traits;

trait SortedToursTrait
{
    public function modifyQuery(\Statamic\Query\Builder $query)
    {
        return $query->orderBy('date', 'asc')->orderBy('title', 'desc');
    }
}
