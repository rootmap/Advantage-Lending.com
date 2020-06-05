<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NeedAnAtterneySettings extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='need_an_atterney_settingses';
}
        