<?php

namespace App\Http\Filters\ContentFilters;

use Illuminate\Database\Eloquent\Builder;
use  App\Http\Filters\Filter;
use App\Constants\ActiveStatus;

class OperatorFilter implements Filter
{
    /**
     * apply
     *
     * @param  Builder $builder
     * @param  string $value
     * @return Buillder for this specific search
     */
    public function apply(Builder $builder, $value)
    {
        return $builder->whereHas("rbts",function(Builder $query) use($value) {
            $query->where('operator_id', $value);
        });
    }
}
