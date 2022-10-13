<?php

namespace App\QueryFilters\User;

use App\QueryFilters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class Email extends BaseFilter
{
    public $key = "email";

    public function applyFilter(Builder $builder): void
    {
        $value = request($this->key);
        $builder->where($this->key, "like", "%{$value}%");
    }
}
