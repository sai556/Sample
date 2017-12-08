<div class="col-sm-12 emp-div">
    <div class="">
        <form id="edit-employee-details" method="post"  enctype="multipart/form-data">
            <h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">New Employee Details</h4>
            <div class="col-sm-6"> 
                <div class="form-group">
                    <b>Gender</b>
                    <select class="form-control"  id="new-emp-gender" name="new-emp-gender" value="{{$personaldetails->gender}}">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                </div>
                <input type="text" name="id" style="visibility: hidden" value="{{$personaldetails->id}}">
                <div class="form-group">
                    <b>Name</b>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">Surname &nbsp;&nbsp;&nbsp; </span>
                        <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name="new-emp-surname" value="{{$personaldetails->surname}}"><br>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">First Name&nbsp;</span>
                        <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name="new-emp-firstname" value="{{$personaldetails->firstname}}"><br>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">Last Name&nbsp;</span>
                        <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name="new-emp-lastname" value="{{$personaldetails->lastname}}">
                    </div> 
                </div>
                <div class="form-group">
                    <b>Date of Birth</b>                                        
                    <input type="date" class="form-control" placeholder="Date of Birth" name="new-emp-dob" value="{{$personaldetails->dob}}">
                </div>
                <div class="form-group">
                    <b>Marital Status</b>                                        
                    <select class="form-control" id="marital-status" class="" name="new-emp-maritalstatus" value="{{$personaldetails->marital_status}}">
                        <option value=>Married</option>
                        <option>Single</option>
                        <option>Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <b>Father Name</b>                                        
                    <input type="text" class="form-control" placeholder="" name="new-emp-fathername" value="{{$personaldetails->father_name}}">
                </div>
                <div class="form-group">
                    <b>Aadhar No</b>                                        
                    <input type="text" class="form-control" placeholder="" name="new-emp-aadharno" value="{{$personaldetails->aadhar_no}}">
                </div>
                <div class="form-group">
                    <b>PAN No</b>                                        
                    <input type="text" class="form-control" placeholder="" name="new-emp-panno" value="{{$personaldetails->pan_no}}">
                </div>
            </div> 
            <div class="col-sm-6">
                <img src="../ProfilePic/{{$personaldetails->profilepic}}" alt="No preview" height="200px;" class="img" name="new-emp-profilephoto">
                <input type="file" class="form-control-file" id="emp-profile-photo" aria-describedby="fileHelp" name="image" style="margin-top: 10px;">
            </div>
            <br>
            <div class="col-sm-12">
                <h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Contact Details</h4>
                <div class="col-sm-6">
                    <div class="form-group">
                        <b>Land No</b>                                        
                        <input type="text" class="form-control" placeholder="" name="new-emp-landno" value="{{$personaldetails->land_no}}">
                    </div>
                    <div class="form-group">
                        <b>Email</b>                                        
                        <input type="text" class="form-control" placeholder="" name="new-emp-email" value="{{$personaldetails->email}}">
                    </div>                                    
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <b>Mobile No</b>                                        
                        <input type="text" class="form-control" placeholder="" name="new-emp-mobile" value="{{$personaldetails->mobile_no}}">
                    </div>
                    <div class="form-group">
                        <b>Emergency Contact</b>                                        
                        <input type="text" class="form-control" placeholder="" name="new-emp-emergencycontact" value="{{$personaldetails->emergency_contact}}">
                    </div>                                    
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <b>Permanant Address</b>
                    <div class="form-check" style="visibility : hidden">
                        <input type="checkbox" class="form-check-input" id="sameaspermanent">
                        Same as permanant address
                    </div>
                    <textarea cols="40" rows="3" class="form-control" name="new-emp-permanentaddress">{{$personaldetails->permanant_address}}</textarea>
                    City <input type="text" class="form-control" placeholder="" name="new-emp-permanant-address-city" value="{{$personaldetails->p_city}}">
                    State <input type="text" class="form-control" placeholder="" name="new-emp-permanant-address-state" value="{{$personaldetails->p_state}}">
                    PIN<input type="text" class="form-control" placeholder="" name="new-emp-permanant-address-pin" value="{{$personaldetails->p_pin}}">
                </div>
                <div class="col-sm-6">
                    <b>Communication Address</b>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="new-emp-communicationaddress">
                            Same as permanant address
                        </label>
                    </div>
                    <textarea cols="40" rows="3" class="form-control" name="new-emp-communicationaddress">{{$personaldetails->communication_address}}</textarea>
                    City <input type="text" class="form-control" placeholder="" name="new-emp-communication-address-city" value="{{$personaldetails->c_city}}">
                    State <input type="text" class="form-control" placeholder="" name="new-emp-communication-address-state" value="{{$personaldetails->c_state}}">
                    PIN<input type="text" class="form-control" placeholder="" name="new-emp-communication-address-pin" value="{{$personaldetails->c_pin}}">
                </div>
            </div>
            <br>
            <div class="col-sm-12" style="margin-top:20px;">
                <button class="btn btn-primary pull-right" style="border-radius:0px;width:200px;">Update</button>
            </div>
        </form>
        <br>        
        <div class="col-sm-12 exp-div">
            <h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Experience Details</h4>    
            <button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addexpbtn" onclick="AddExperienceForm({{$personaldetails->id}})"><i class="fa fa-plus-circle"></i>&nbsp;Add Experience</button>
            <form method="post" id="exp-form">
                <table class="table table-bordered table-striped table-condensed table-responsive" style="margin-top: 10px;margin-left:20px;">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Organisation Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Post Held</th>
                            <th>From</th>
                            <th>To</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="newExpRow">                
                        </tr>    
                        @foreach($expdetails as $details)
                        <tr id="exprow-{{$details->id}}">
                            <td>{{$details->id}}</td>
                            <td>{{$details->organization}}</td>
                            <td>{{$details->address}}</td>
                            <td>{{$details->city}}</td>
                            <td>{{$details->state}}</td>
                            <td>{{$details->postheld}}</td>
                            <td>{{$details->fromyear}}</td>
                            <td>{{$details->toyear}}</td>
                            <td><button class="btn btn-primary btn-xs" type="button" onclick="EditExpDetails({{$details->id}})">Edit</button></td>
                            <td><button class="btn btn-danger btn-xs" type="button" onclick="DeleteExpDetails({{$details->id}})">Delete</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <br>
        <div class="col-sm-12 edu-div">
            <h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Educational Details</h4>    
            <button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addedubtn" onclick="AddQualificationForm({{$personaldetails->id}})"><i class="fa fa-plus-circle"></i>&nbsp;Add Qualification</button>
            <br>    
            <form method="post" id="edu-form">
                <table class="table table-bordered table-striped table-condensed table-responsive" style="margin-top: 10px;margin-left:20px;">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Institution Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Degree</th>
                            <th>Certification</th>
                            <th>Passed Year</th>
                            <th></th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="newRow">                
                        </tr>
                        @foreach($edudetails as $details)
                        <tr id="edurow-{{$details->id}}">
                            <td>{{$details->id}}</td>
                            <td>{{$details->institution}}</td>
                            <td>{{$details->address}}</td>
                            <td>{{$details->city}}</td>
                            <td>{{$details->state}}</td>
                            <td>{{$details->degree}}</td>
                            <td>{{$details->certification}}</td>
                            <td>{{$details->year}}</td>
                            <td><button class="btn btn-primary btn-xs" type="button" onclick="EditEduDetails({{$details->id}})">Edit</button></td>
                            <td><button class="btn btn-danger btn-xs" type="button" onclick="DeleteEduDetails({{$details->id}})">Delete</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <br>
        <input hidden type="text" value="{{$personaldetails->id}}" id="empid" style="visibility: hidden">
        <div class="col-sm-12 family-div">
            <h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Family Details</h4>    
            <button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addedubtn" onclick="AddFamilyForm({{$personaldetails->id}})"><i class="fa fa-plus-circle"></i>&nbsp;Add Person</button>
            <br>    
            <form method="post" id="family-form">
                <table class="table table-bordered table-striped table-condensed table-responsive" style="margin-top: 10px;margin-left:20px;">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Name</th> 
                            <th>Relation</th>
                            <th>Qualification</th>
                            <th>Occupation</th>
                            <th>Aadhar Number</th>
                            <th>Contact Number</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="newFamilyRow">                
                        </tr> 
                        @foreach($familydetails as $details)
                        <tr id="familyrow-{{$details->id}}">
                            <td>{{$details->id}}</td>
                            <td>{{$details->name}}</td>
                            <td>{{$details->relation}}</td>
                            <td>{{$details->qualification}}</td>
                            <td>{{$details->occupation}}</td>
                            <td>{{$details->aadhar}}</td>
                            <td>{{$details->contact}}</td>                
                            <td><button class="btn btn-primary btn-xs" type="button" onclick="EditFamilyDetails({{$details->id}})">Edit</button></td>
                            <td><button class="btn btn-danger btn-xs" type="button" onclick="DeleteFamilyDetails({{$details->id}})">Delete</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <br>        
    </div>
</div>