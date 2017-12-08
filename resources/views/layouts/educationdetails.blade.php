<h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Educational Details</h4>   
@if(count($edudetails) < 3)
<button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addedubtn" onclick="AddQualificationForm({{$id}})"><i class="fa fa-plus-circle"></i>&nbsp;Add Qualification</button>
@else
<button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addedubtn" onclick="AddQualificationForm({{$id}})" disabled="disabled"><i class="fa fa-plus-circle"></i>&nbsp;Add Qualification</button>
@endif

<br>
<input hidden type="text" value="{{$id}}" id="empid" style="visibility: hidden">
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