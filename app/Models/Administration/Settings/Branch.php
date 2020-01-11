<?php

namespace App\Models\Administration\Settings;

use App\Models\Administration\Supplier\Supplier;
use App\Scopes\BranchScope;
use App\Scopes\CompanyScope;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Branch extends Model
{
    use SoftDeletes, Userstamps;
    protected $fillable = ['code', 'name', 'status', 'company_id','address'];

    protected static function boot()
    {
        parent::boot();

//        static::addGlobalScope(new BranchScope);
        static::addGlobalScope(new CompanyScope);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function suppliers(){
        return $this->hasMany(Supplier::class);
    }
    public function warehouses(){
        return $this->hasMany(Warehouse::class);
    }

}
