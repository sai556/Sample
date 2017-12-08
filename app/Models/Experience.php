<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model {

    protected $table = 'experiencedetails';
    public $timestanps = true;
    public $fillable = array('id', 'eid', 'organization', 'address', 'city', 'state', 'postheld', 'fromyear', 'toyear', 'is_active', 'is_active');

}
