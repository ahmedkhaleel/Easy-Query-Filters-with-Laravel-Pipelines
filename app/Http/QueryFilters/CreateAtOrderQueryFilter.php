<?php
namespace App\Http\QueryFilters;



use Closure;
use Illuminate\Database\Eloquent\Builder;

class CreateAtOrderQueryFilter
{
    public function handle(Builder $builder,  Closure $next)
    {
        if (!$direction = request()->get('create_at_order')) {
            return $next($builder);
        }

        return $next($builder)
            ->reorder()

            ->orderBy('created_at', $direction);

    }
}
