<html>
    <head>
        <title>Employee</title>
        {{ Html::style('css/bootstrap.min.css') }}
        {{ Html::script('js/jquery.js') }}
        {{ Html::style('js/bootstrap.js') }}
        {{ Html::script('js/custom.js') }}
    </head>
    <style>
        body{
            color:#666;
            font-family: verdana;
        }
        .emp-div{
            padding: 10px;
            background-color: whitesmoke;
            border-top: 2px solid #cbccce;
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Employee Master</h2><br>
                    <div>
                        <div class="btn-group">
                            <button class="btn btn-primary" style="border-radius: 0px;">Email</button>
                            <button class="btn btn-primary" style="border-radius: 0px;">PDF</button>
                            <button class="btn btn-primary" style="border-radius: 0px;">CSV</button>
                            <button class="btn btn-primary" style="border-radius: 0px;">Text</button>
                        </div>     
                        <button class="btn btn-primary" style="border-radius: 0px;" onclick="AddEmploee()">New Employee</button>
                    </div>
                    <br>
                    <table class="table table-bordered table-striped table-hover table-responsive table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($details as $emp)
                            <tr>
                                <td>{{$emp->id}}</td>
                                <td>{{$emp->fisrtname . ' ' . $emp->lastname}}</td>
                                <td></td>
                                <td></td>
                                <td>{{$emp->mobile_no}}</td>
                                <td>{{$emp->permanent_address}}</td>
                                <td><a href="#" onclick="ViewDetails({{$emp->id}})">View Details</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>                  

                </div>
            </div>

            <div class="row main-div">

            </div>
            <br>
            <br>
        </div>
    </body>
</html>