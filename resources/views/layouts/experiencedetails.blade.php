<h4 style="margin-left: 10px;font-weight: bold;border-bottom: 2px solid #2e6da4;">Experience Details</h4>   
@if(count($expdetails) < 3)
<button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addexpbtn" onclick="AddExperienceForm({{$id}})"><i class="fa fa-plus-circle"></i>&nbsp;Add Experience</button>
@else
<button class="btn btn-success" style="border-radius: 0px;margin-left: 20px;" id="addexpbtn" onclick="AddExperienceForm({{$id}})" disabled="disabled"><i class="fa fa-plus-circle"></i>&nbsp;Add Qualification</button>
@endif

<br>
<input hidden type="text" value="{{$id}}" id="empid" style="visibility: hidden">
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