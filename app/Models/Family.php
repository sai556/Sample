<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model {

    protected $table = 'familydetails';
    public $timestanps = true;
    public $fillable = array('id', 'eid', 'name', 'relation', 'qualification', 'aadhar', 'contact', 'is_active','occupation');

}
