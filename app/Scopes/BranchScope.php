<?php


namespace App\Scopes;


use Illuminate\Database\Eloquent\{Builder, Model, Scope};

class BranchScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('branch_id', '=', session()->get('branch_id'));
    }
}