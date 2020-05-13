<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HelpOnManyCase extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='help_on_many_cases';
}
        