<?php

namespace App\QueryFilters\User;

use App\QueryFilters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class SortId extends BaseFilter
{
    public $key = "sort_id";

    public function applyFilter(Builder $builder): void
    {
        $value = request($this->key);
        $builder->orderBy("id", $value);
    }
}
