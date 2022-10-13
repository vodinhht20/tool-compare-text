<?php

namespace App\QueryFilters\User;

use App\QueryFilters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class FormCreatedAt extends BaseFilter
{
    public $key = "created_at";

    public function applyFilter(Builder $builder): void
    {
        $value = request($this->key);
        $builder->where($this->key, ">=", $value);
    }
}
