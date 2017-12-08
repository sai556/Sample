<div class="col-sm-12 emp-div">
    <div class="">
        <form id="new-employee-details" method="post"  enctype="multipart/form-data">
            <h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">New Employee Details</h4>
            <div class="col-sm-6"> 
                <div class="form-group">
                    <b>Gender</b>
                    <select class="form-control"  id="new-emp-gender" name="new-emp-gender">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <b>Name</b>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">Surname &nbsp;&nbsp;&nbsp; </span>
                        <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name="new-emp-surname"><br>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">First Name&nbsp;</span>
                        <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name="new-emp-firstname"><br>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">Last Name&nbsp;</span>
                        <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name="new-emp-lastname">
                    </div> 
                </div>
                <div class="form-group">
                    <b>Date of Birth</b>                                        
                    <input type="date" class="form-control" placeholder="Date of Birth" name="new-emp-dob">
                </div>
                <div class="form-group">
                    <b>Marital Status</b>                                        
                    <select class="form-control" id="marital-status" class="" name="new-emp-maritalstatus">
                        <option value=>Married</option>
                        <option>Single</option>
                        <option>Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <b>Father Name</b>                                        
                    <input type="text" class="form-control" placeholder="" name="new-emp-fathername">
                </div>
                <div class="form-group">
                    <b>Aadhar No</b>                                        
                    <input type="text" class="form-control" placeholder="" name="new-emp-aadharno">
                </div>
                <div class="form-group">
                    <b>PAN No</b>                                        
                    <input type="text" class="form-control" placeholder="" name="new-emp-panno">
                </div>
            </div> 
            <div class="col-sm-6">
                <img src="../mi-redmi-3s-prime-na-original-imaeh6beckzjqeza.jpeg" alt="No preview" height="200px;" class="img" name="new-emp-profilephoto">
                <input type="file" class="form-control-file" id="emp-profile-photo" aria-describedby="fileHelp" name="image" style="margin-top: 10px;">
            </div>
            <br>
            <div class="col-sm-12">
                <h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Contact Details</h4>
                <div class="col-sm-6">
                    <div class="form-group">
                        <b>Land No</b>                                        
                        <input type="text" class="form-control" placeholder="" name="new-emp-landno">
                    </div>
                    <div class="form-group">
                        <b>Email</b>                                        
                        <input type="text" class="form-control" placeholder="" name="new-emp-email">
                    </div>                                    
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <b>Mobile No</b>                                        
                        <input type="text" class="form-control" placeholder="" name="new-emp-mobile">
                    </div>
                    <div class="form-group">
                        <b>Emergency Contact</b>                                        
                        <input type="text" class="form-control" placeholder="" name="new-emp-emergencycontact">
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
                    <textarea cols="40" rows="3" class="form-control" name="new-emp-permanentaddress"></textarea>
                    City <input type="text" class="form-control" placeholder="" name="new-emp-permanant-address-city">
                    State <input type="text" class="form-control" placeholder="" name="new-emp-permanant-address-state">
                    PIN<input type="text" class="form-control" placeholder="" name="new-emp-permanant-address-pin">
                </div>
                <div class="col-sm-6">
                    <b>Communication Address</b>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="new-emp-communicationaddress">
                            Same as permanant address
                        </label>
                    </div>
                    <textarea cols="40" rows="3" class="form-control" name="new-emp-communicationaddress"></textarea>
                    City <input type="text" class="form-control" placeholder="" name="new-emp-communication-address-city">
                    State <input type="text" class="form-control" placeholder="" name="new-emp-communication-address-state">
                    PIN<input type="text" class="form-control" placeholder="" name="new-emp-communication-address-pin">
                </div>
            </div>
            <br>
            <div class="col-sm-12" style="margin-top:20px;">
                <button class="btn btn-primary pull-right" style="border-radius:0px;width:200px;">Save & Next</button>
            </div>
        </form>
        <br>
    </div>
</div>