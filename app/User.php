<?php

namespace App;

use App\Models\Administration\Settings\Branch;
use App\Scopes\BranchScope;
use App\Scopes\CompanyScope;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Wildside\Userstamps\Userstamps;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, Userstamps, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'email', 'password', 'phone', 'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    /*get user Role name by user id*/
    public function role($uid)
    {
        $role_id = DB::table('model_has_roles')->where('model_id', $uid)->first()->role_id;
        return Role::find($role_id)->name;
    }

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope(new BranchScope);
//        static::addGlobalScope(new CompanyScope);
//    }

}
