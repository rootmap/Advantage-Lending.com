<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForAttorneyPageSetting extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='for_attorney_page_settings';
}
        