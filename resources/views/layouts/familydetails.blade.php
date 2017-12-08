<h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Family Details</h4>   
@if(count($familydetails) < 3)
<button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addedubtn" onclick="AddFamilyForm({{$id}})"><i class="fa fa-plus-circle"></i>&nbsp;Add Person</button>
@else
<button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addedubtn" onclick="AddFamilyForm({{$id}})" disabled="disabled"><i class="fa fa-plus-circle"></i>&nbsp;Add Person</button>
@endif

<br>
<input hidden type="text" value="{{$id}}" id="empid" style="visibility: hidden">
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