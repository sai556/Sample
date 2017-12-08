<input hidden type="text" value="{{$id}}" id="empid" style="visibility: hidden">
<div class="col-sm-12 exp-div">
    <h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Experience Details</h4>    
    <button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addexpbtn" onclick="AddExperienceForm({{$id}})"><i class="fa fa-plus-circle"></i>&nbsp;Add Experience</button>
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
            </tbody>
        </table>
    </form>
</div>
<br>
<div class="col-sm-12 edu-div">
    <h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Educational Details</h4>    
    <button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addedubtn" onclick="AddQualificationForm({{$id}})"><i class="fa fa-plus-circle"></i>&nbsp;Add Qualification</button>
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
            </tbody>
        </table>
    </form>
</div>
<br>
<div class="col-sm-12 family-div">
    <h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Family Details</h4>    
    <button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addedubtn" onclick="AddFamilyForm({{$id}})"><i class="fa fa-plus-circle"></i>&nbsp;Add Person</button>
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
            </tbody>
        </table>
    </form>
</div>
<br>
<a href="/" class="btn btn-success pull-right" style="border-radius: 0px;width: 200px;">Finish</a>