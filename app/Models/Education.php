<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model {

    protected $table = 'educationaldetails';
    public $timestanps = true;
    public $fillable = array('id', 'eid', 'institution', 'address', 'city', 'state', 'degree', 'certification','year','is_active');

}
