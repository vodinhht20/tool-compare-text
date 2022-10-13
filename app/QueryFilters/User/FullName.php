<?php

namespace App\QueryFilters\User;

use App\QueryFilters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class FullName extends BaseFilter
{
    public $key = "name";

    public function applyFilter(Builder $builder): void
    {
        $value = request($this->key);
        $builder->where($this->key, "like", "%{$value}%");
    }
}
