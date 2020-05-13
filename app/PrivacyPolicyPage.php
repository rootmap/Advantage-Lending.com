<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrivacyPolicyPage extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='privacy_policy_pages';
}
        