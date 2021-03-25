<?php

namespace App\Http\Filters\ContentFilters;

use Illuminate\Database\Eloquent\Builder;
use  App\Http\Filters\Filter;

class GlobalSearchFilter implements Filter
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
        return $builder->join('translatables','translatables.record_id','=','contents.id')
        ->join('tans_bodies','tans_bodies.translatable_id','translatables.id')
        ->where('translatables.table_name','contents')
        ->where('translatables.column_name','title')
        ->where(function($q) use ($value){
            $q->where('contents.title', 'like', '%' . $value. '%');
            $q->orWhere('tans_bodies.body', 'like', '%' . $value . '%');
        });
    }
}
