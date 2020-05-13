<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeetLeaderSetting extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='meet_leader_settings';
}
        