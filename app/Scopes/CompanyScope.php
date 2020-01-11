<?php


namespace App\Scopes;


use Illuminate\Database\Eloquent\{Builder, Model, Scope};

class CompanyScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('company_id', '=', session()->get('company_id'));
    }
}