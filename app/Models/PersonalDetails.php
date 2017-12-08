<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model {

    protected $table = 'personal_details';
    public $timestamps = true;
    public $fillable = array('id', 'gender', 'firstname', 'lastname', 'surname', 'dob', 'marital_status', 'father_name', 'aadhar_no', 'pan_no', 'land_no', 'mobile_no', 'email', 'emargency_contact',
        'permanant_address', 'communication_address', 'p_city', 'p_state', 'p_pin', 'c_city', 'c_state', 'c_pin', 'status', 'is_active','profilepic');

}
