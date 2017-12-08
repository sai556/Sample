<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\PersonalDetails;
use Illuminate\Support\Facades\Input;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Family;

class EmployeeController extends Controller {

    public function index() {
        $details = PersonalDetails::where('is_active', '=', 0)->get();
        return view('layouts.index', compact('details'));
    }

    public function SavePersonalDetails(Request $request) {
        $details = new PersonalDetails;
        $file = Input::file('image');
        if ($file) {
            $destinationPath = 'ProfilePic/';
            $name = Input::file('image')->getClientOriginalName();
            $file->move($destinationPath, $name);
            $details->profilepic = $name;
        }

        $details->gender = $request->get('new-emp-gender');
        $details->firstname = $request->get('new-emp-surname');
        $details->lastname = $request->get('new-emp-firstname');
        $details->surname = $request->get('new-emp-lastname');
        $details->dob = $request->get('new-emp-dob');
        $details->marital_status = $request->get('new-emp-maritalstatus');
        $details->father_name = $request->get('new-emp-fathername');
        $details->aadhar_no = $request->get('new-emp-aadharno');
        $details->pan_no = $request->get('new-emp-panno');
        $details->land_no = $request->get('new-emp-landno');
        $details->mobile_no = $request->get('new-emp-mobile');
        $details->email = $request->get('new-emp-email');
        $details->emargency_contact = $request->get('new-emp-emergencycontact');
        $details->permanant_address = $request->get('new-emp-permanentaddress');
        $details->communication_address = $request->get('new-emp-communicationaddress');
        $details->p_city = $request->get('new-emp-permanant-address-city');
        $details->p_state = $request->get('new-emp-permanant-address-state');
        $details->p_pin = $request->get('new-emp-permanant-address-pin');
        $details->c_city = $request->get('new-emp-communication-address-city');
        $details->c_state = $request->get('new-emp-communication-address-state');
        $details->c_pin = $request->get('new-emp-communication-address-pin');
        $details->status = 0;
        $details->is_active = 0;
        $details->save();
        $personaldetails = PersonalDetails::where('id', '=', $details->id)->first();
        $id = $details->id;
        return view('layouts.otherdetails', compact('personaldetails', 'id'));
    }

    public function UpdatePersonalDetails(Request $request) {
        $id = $request->get('id');
        $file = Input::file('image');
        $picname ="";
        if ($file) {
            $destinationPath = 'ProfilePic/';
            $name = Input::file('image')->getClientOriginalName();
            $file->move($destinationPath, $name);
            $picname = $name;
        }
        PersonalDetails::where('id', '=', $id)->update([
            'gender' => $request->get('new-emp-gender'),
            'firstname' => $request->get('new-emp-surname'),
            'lastname' => $request->get('new-emp-firstname'),
            'surname' => $request->get('new-emp-lastname'),
            'dob' => $request->get('new-emp-dob'),
            'marital_status' => $request->get('new-emp-maritalstatus'),
            'father_name' => $request->get('new-emp-fathername'),
            'aadhar_no' => $request->get('new-emp-aadharno'),
            'pan_no' => $request->get('new-emp-panno'),
            'land_no' => $request->get('new-emp-landno'),
            'mobile_no' => $request->get('new-emp-mobile'),
            'email' => $request->get('new-emp-email'),
            'emargency_contact' => $request->get('new-emp-emergencycontact'),
            'permanant_address' => $request->get('new-emp-permanentaddress'),
            'communication_address' => $request->get('new-emp-communicationaddress'),
            'profilepic' => $picname,
            'p_city' => $request->get('new-emp-permanant-address-city'),
            'p_state' => $request->get('new-emp-permanant-address-state'),
            'p_pin' => $request->get('new-emp-permanant-address-pin'),
            'c_city' => $request->get('new-emp-communication-address-city'),
            'c_state' => $request->get('new-emp-communication-address-state'),
            'c_pin' => $request->get('new-emp-communication-address-pin'),
        ]);
        $personaldetails = PersonalDetails::where('is_active', '=', 0)->where('id', '=', $id)->first();
        $edudetails = Education::where('is_active', '=', 0)->where('eid', '=', $id)->get();
        $expdetails = Experience::where('is_active', '=', 0)->where('eid', '=', $id)->get();
        $familydetails = Family::where('is_active', '=', 0)->where('eid', '=', $id)->get();
        return view('layouts.details', compact('personaldetails', 'edudetails', 'expdetails', 'familydetails'));
    }

    public function EduAddForm($id) {
        return view('layouts.eduaddform', compact('id'));
    }

    public function SaveEduDetails(Request $request, $id) {
        $eduid = $request->get('id');
        if ($eduid == null) {
            $education = new Education;
            $education->eid = $id;
            $education->institution = $request->get('instituion');
            $education->address = $request->get('address');
            $education->city = $request->get('city');
            $education->state = $request->get('state');
            $education->degree = $request->get('degree');
            $education->certification = $request->get('certification');
            $education->year = $request->get('year');
            $education->save();
        } else {
            Education::where('id', '=', $eduid)->update([
                'institution' => $request->get('instituion'),
                'address' => $request->get('address'),
                'city' => $request->get('city'),
                'state' => $request->get('state'),
                'degree' => $request->get('degree'),
                'certification' => $request->get('certification'),
                'year' => $request->get('year'),
            ]);
        }
        $edudetails = Education::where('eid', '=', $id)->where('is_active', '=', 0)->get();
        return view('layouts.educationdetails', compact('edudetails', 'id'));
    }

    public function editEduForm($id) {
        $details = Education::where('ID', '=', $id)->first();
        return view('layouts.eduaddform', compact('details'));
    }

    public function deleteEduDetails($id, $eid) {
        Education::where('id', '=', $id)->update([
            'is_active' => 1
        ]);
        $edudetails = Education::where('eid', '=', $eid)->where('is_active', '=', 0)->get();
        return view('layouts.educationdetails', compact('edudetails', 'id'));
    }

    public function ExpAddForm($id) {
        return view('layouts.expaddform', compact('id'));
    }

    public function SaveExpDetails(Request $request, $id) {
        $eduid = $request->get('id');
        if ($eduid == null) {
            $experience = new Experience;
            $experience->eid = $id;
            $experience->organization = $request->get('organization');
            $experience->address = $request->get('address');
            $experience->city = $request->get('city');
            $experience->state = $request->get('state');
            $experience->postheld = $request->get('postheld');
            $experience->fromyear = $request->get('fromyear');
            $experience->toyear = $request->get('toyear');
            $experience->is_active = 0;
            $experience->save();
        } else {
            Experience::where('id', '=', $eduid)->update([
                'organization' => $request->get('organization'),
                'address' => $request->get('address'),
                'city' => $request->get('city'),
                'state' => $request->get('state'),
                'postheld' => $request->get('postheld'),
                'fromyear' => $request->get('fromyear'),
                'toyear' => $request->get('toyear'),
            ]);
        }
        $expdetails = Experience::where('eid', '=', $id)->where('is_active', '=', 0)->get();
        return view('layouts.experiencedetails', compact('expdetails', 'id'));
    }

    public function editExpForm($id) {
        $details = Experience::where('ID', '=', $id)->first();
        return view('layouts.expaddform', compact('details'));
    }

    public function deleteExpDetails($id, $eid) {
        Experience::where('id', '=', $id)->update([
            'is_active' => 1
        ]);
        $expdetails = Experience::where('eid', '=', $eid)->where('is_active', '=', 0)->get();
        return view('layouts.experiencedetails', compact('expdetails', 'id'));
    }

    public function FamilyAddForm($id) {
        return view('layouts.familyaddform', compact('id'));
    }

    public function SaveFamilyDetails(Request $request, $id) {
        $eduid = $request->get('id');
        if ($eduid == null) {
            $family = new Family;
            $family->eid = $id;
            $family->name = $request->get('name');
            $family->relation = $request->get('relation');
            $family->qualification = $request->get('qualification');
            $family->occupation = $request->get('occupation');
            $family->aadhar = $request->get('aadhar');
            $family->contact = $request->get('contact');
            $family->is_active = 0;
            $family->save();
        } else {
            Family::where('id', '=', $eduid)->update([
                'name' => $request->get('name'),
                'relation' => $request->get('relation'),
                'qualification' => $request->get('qualification'),
                'occupation' => $request->get('occupation'),
                'aadhar' => $request->get('aadhar'),
                'contact' => $request->get('contact'),
            ]);
        }
        $familydetails = Family::where('eid', '=', $id)->where('is_active', '=', 0)->get();
        return view('layouts.familydetails', compact('familydetails', 'id'));
    }

    public function editFamilyForm($id) {
        $details = Family::where('ID', '=', $id)->first();
        return view('layouts.familyaddform', compact('details'));
    }

    public function deleteFamilyDetails($id, $eid) {
        Family::where('id', '=', $id)->update([
            'is_active' => 1
        ]);
        $familydetails = Family::where('eid', '=', $eid)->where('is_active', '=', 0)->get();
        return view('layouts.familydetails', compact('familydetails', 'id'));
    }

    public function AddEmployee() {
        return view('layouts.newemployee');
    }

    public function ViewDetails($id) {
        $personaldetails = PersonalDetails::where('is_active', '=', 0)->where('id', '=', $id)->first();
        $edudetails = Education::where('is_active', '=', 0)->where('eid', '=', $id)->get();
        $expdetails = Experience::where('is_active', '=', 0)->where('eid', '=', $id)->get();
        $familydetails = Family::where('is_active', '=', 0)->where('eid', '=', $id)->get();
        return view('layouts.details', compact('personaldetails', 'edudetails', 'expdetails', 'familydetails'));
    }

}
