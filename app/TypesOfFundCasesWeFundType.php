<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypesOfFundCasesWeFundType extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='types_of_fund_cases_we_fund_types';
}
        