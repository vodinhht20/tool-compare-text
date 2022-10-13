<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Database\Eloquent\Builder;

abstract class BaseFilter
{
    public $key;

    abstract public function applyFilter(Builder $builder): void;

    public function handle(Builder $builder, Closure $next)
    {
        if (!request()->has($this->key)){
            return $next($builder);
        }

        $this->applyFilter($builder);

        return $next($builder);
    }
}