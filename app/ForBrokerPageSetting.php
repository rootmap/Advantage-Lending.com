<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForBrokerPageSetting extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='for_broker_page_settings';
}
        