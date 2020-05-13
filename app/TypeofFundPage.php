<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeofFundPage extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='type_of_fund_pages';
}
        