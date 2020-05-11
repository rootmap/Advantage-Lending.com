<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactMeAbout extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='contact_me_abouts';
}
        