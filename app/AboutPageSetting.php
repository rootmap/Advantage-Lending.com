<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutPageSetting extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='about_page_settings';
}
        