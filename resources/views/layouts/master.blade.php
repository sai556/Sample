<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>   			
        {{ Html::script('js/custom.js') }}
        <style>
            hr {
                background-color: #DCDCDC !important;
                color: #DCDCDC!important;
                border: solid 1px #DCDCDC!important;
                width: 100% !important;
                padding: 0px;
                margin: 3px!important;
            }
            th,td {
                text-align: center;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <h2>Employee Master</h2><br>
            <div class="row">
                <div class="col-8">
                    <div class="btn-group" role="group" aria-label="">
                        <button type="button" class="btn btn-primary">Email</button>
                        <button type="button" class="btn btn-primary">PDF</button>
                        <button type="button" class="btn btn-primary">CSV</button>
                        <button type="button" class="btn btn-primary">Text</button>
                    </div>
                    <button type="button" class="btn btn-primary">Add New</button>                
                </div>
                <div class="col-4">
                    <div class="wrap">
                        <div class="search">

                            <div class="input-group">
                                <input type="text" class="searchTerm form-control " id="searchTerm" placeholder="What are you looking for?" onkeyup="myFunction()" style="display:inline-block" name="term">
                                <button type="submit" class="searchButton btn btn-md btn-success" >
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>

                        </div>
                    </div>              
                </div>
            </div><br>         
            <div class="row">
                <div class="col-12">           
                    <table class="table" class="emp_table">
                        <thead class="thead-default">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Contact No.</th>
                                <th>Address</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>             

                </div>
            </div>
            <div class="new-form-div">
                <div class="personal-details-div">
                    <form method="post" id="new-employee-details" enctype="multipart/form-data"> 
                        <div class="card" style="margin-top:70px;">
                            <h4 class="card-header">New Employee Details</h4><br>                  
                            <div class="row">                  
                                <div class="col-7">
                                    <div class="card-block">                                  
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label">Gender</label>
                                            <div class="col-4">
                                                <select class="form-control" id="new-emp-gender" name="new-emp-gender">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Others</option> 
                                                </select>  
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3 col-form-label">
                                                Name
                                            </div>
                                            <div class="col-9">
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
                                        </div><br>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label" >Date of Birth</label>
                                            <div class="col-9">
                                                <input type="date" class="form-control" placeholder="Date of Birth" name="new-emp-dob">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="marital-status" class="col-3 col-form-label">Marital Status</label>
                                            <div class="col-4">
                                                <select class="form-control" id="marital-status" class="" name="new-emp-maritalstatus">
                                                    <option value=>Married</option>
                                                    <option>Single</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label" >Father Name</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" placeholder="" name="new-emp-fathername">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label" >Aadhar No</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" placeholder="" name="new-emp-aadharno">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label" >PAN No</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" placeholder="" name="new-emp-panno">
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-5 " style="margin-top:100px;">
                                    <div class="form-group" >
                                        <div class="col-sm-12">
                                            <div class="col-7 m-4 ">
                                                <img src="../mi-redmi-3s-prime-na-original-imaeh6beckzjqeza.jpeg" alt="No preview" style="width:100px; height:170px;" class="img" name="new-emp-profilephoto">
                                                <input type="file" class="form-control-file" id="emp-profile-photo" aria-describedby="fileHelp" name="image">
                                            </div>
                                        </div>                 
                                    </div>                    
                                </div>
                            </div>   
                        </div>           

                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="" style="border-bottom : 1px solid lightgrey; padding:11px; border-top:1px solid lightgrey; background-color:whitesmoke;">Contact Details</h5><br>
                                <div class="col-7">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label" >Land No</label>
                                        <div class="col-4">
                                            <input type="text" class="form-control" placeholder="" name="new-emp-landno">
                                        </div>
                                        <label for="example-text-input" class="col-2 col-form-label" >Mobile No</label>
                                        <div class="col-4">
                                            <input type="text" class="form-control" placeholder="" name="new-emp-mobile">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label" >Email</label>
                                        <div class="col-4">
                                            <input type="text" class="form-control" placeholder="" name="new-emp-email">
                                        </div>
                                        <label for="example-text-input" class="col-2 col-form-label" >Emergency Contact</label>
                                        <div class="col-4">
                                            <input type="text" class="form-control" placeholder="" name="new-emp-emergencycontact">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="display:inline-block;">
                                            <label for="example-text-input" class="col-form-label" >Permanant Address</label>
                                            <div class="form-check" style="visibility : hidden">
                                                <input type="checkbox" class="form-check-input" id="sameaspermanent">
                                                Same as permanant address
                                            </div>
                                            <textarea cols="40" rows="3" class="form-control" name="new-emp-permanentaddress"></textarea>
                                            City <input type="text" class="form-control" placeholder="" name="new-emp-permanant-address-city">
                                            State <input type="text" class="form-control" placeholder="" name="new-emp-permanant-address-state">
                                            PIN<input type="text" class="form-control" placeholder="" name="new-emp-permanant-address-pin">
                                        </div> 
                                        <div class="col-sm-6" style="display:inline-block">
                                            <label for="example-text-input" class="col-form-label" >Communication Address</label>
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
                                </div>
                            </div>                 
                        </div>

                        <center>
                            <button class="btn btn-primary" style="border-radius:0px;width:200px;">Save</button>
                        </center>
                    </form>
                    <form id="exp-form" method="post" action="">
                        <div class="row">

                            <div class="col-12">
                                <h5 class="" style="border-bottom : 1px solid lightgrey; padding:11px; border-top:1px solid lightgrey; background-color:whitesmoke;">Experience Details</h5>
                                &nbsp<button type="button" class="btn btn-sm btn-primary" id="add-exp-details"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>

                                <table class="table table-bordered" style="margin-top:10px;">
                                    <thead class="thead">
                                        <tr>
                                            <th>Organisation Name</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Post Held</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th colspan="3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="exp-data">


                                        </tr>
                                        <tr class="new-exp-row">

                                        </tr>           
                                    </tbody>
                                </table>  

                            </div>                 
                        </div></form> 
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="" style="border-bottom : 1px solid lightgrey; padding:11px; border-top:1px solid lightgrey; background-color:whitesmoke;">Educational Details</h5><br>
                        &nbsp<button class="btn btn-sm btn-primary" id="add-educational-details" onclick="AddNewEducationalForm()"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
                        <form name="eduaddfrom">
                            <table class="table table-bordered" style="margin-top:10px;" id="edu-table">
                                <thead class="thead">
                                    <tr>
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
                                <tbody id="new-education-row2">
                                    <tr class="">
                                        
                                    </tr>            
                                    
                                </tbody>
                            </table> 
                        </form>
                    </div>                 
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="" style="border-bottom : 1px solid lightgrey; padding:11px; border-top:1px solid lightgrey; background-color:whitesmoke;">Family Details</h5><br>
                        &nbsp<button class="btn btn-sm btn-primary" id="add-family-details" ><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
                        <table class="table table-bordered" style="margin-top:10px;">
                            <thead class="thead">
                                <tr>
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
                                <tr>
                                    <td>XYZ</td>
                                    <td>PQR</td>
                                    <td>TER</td>
                                    <td>UJK</td>
                                    <td>897541656600</td>
                                    <td>7896541230</td>
                                    <td><button class="btn btn-sm btn-info">Edit</button></td>
                                    <td><button class="btn btn-sm btn-danger">Delete</button></td>
                                </tr>             
                            </tbody>
                        </table>                      
                    </div>                 
                </div>
            </div>
        </form>
    </div>
</body>
</html>