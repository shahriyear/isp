<?php

namespace App\Models\Administration\Settings;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Company extends Model
{
    use SoftDeletes, Userstamps;
    protected $fillable = ['code','name','address','logo','status'];



    public function branches(){
        return $this->hasMany(Branch::class);
    }
}
