<?php

namespace App\Models\Isp;

use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Isp extends Model
{
    use SoftDeletes, Userstamps;
    protected $fillable = ['name', 'description', 'lat', 'lang', 'status'];
}
