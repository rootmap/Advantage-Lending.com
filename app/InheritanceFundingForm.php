<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InheritanceFundingForm extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='inheritance_funding_forms';
}
        