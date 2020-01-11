<?php

namespace App\Models\Isp;

use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IspUser extends Model
{
    use SoftDeletes, Userstamps;
    protected $fillable = ['name', 'email', 'ip', 'phone', 'address', 'status'];
}
