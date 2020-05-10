<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class USAState extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='usa_states';
}
        