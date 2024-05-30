<?php

namespace App\Scopes;

use App\Traits\SortedToursTrait;
use Statamic\Query\Scopes\Scope;

class SortedTours extends Scope
{
    use SortedToursTrait;

    /**
     * Apply the scope.
     *
     * @param \Statamic\Query\Builder $query
     * @param array $values
     * @return void
     */
    public function apply($query, $values)
    {
        $this->modifyQuery($query);
    }
}
