<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GlossarySectionContent extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='glossary_section_contents';
}
        