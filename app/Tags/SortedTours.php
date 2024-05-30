<?php

namespace App\Tags;

use App\Traits\SortedToursTrait;
use Statamic\Facades\Collection;
use Statamic\Tags\Tags;

class SortedTours extends Tags
{
    use SortedToursTrait;

    public function index()
    {
        $query = Collection::findByHandle('tours')?->queryEntries();

        return $this->modifyQuery($query)->get()->all();
    }
}
