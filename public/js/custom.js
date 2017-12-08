$(document).on("change", ".form-check-input", function () {
    if ($(this).is(':checked')) {
        $("input[name=new-emp-communicationaddress]").value = $("input[name=new-emp-permanentaddress]").value;
        $("input[name=new-emp-communication-address-city]").val($("input[name=new-emp-permanant-address-city]").val());
        $("input[name=new-emp-communication-address-state]").val($("input[name=new-emp-permanant-address-state]").val());
        $("input[name=new-emp-communication-address-pin]").val($("input[name=new-emp-permanant-address-pin]").val());
    } else {
        $("input[name=new-emp-communicationaddress]").val('');
        $("input[name=new-emp-communication-address-city]").val('');
        $("input[name=new-emp-communication-address-state]").val('');
        $("input[name=new-emp-communication-address-pin]").val('');
    }
});


$(document).on("submit", "form#new-employee-details", function () {
    $.ajax({
        type: 'post',
        url: '/savepersonaldetails',
        contentType: false,
        data: new FormData(this),
        processData: false,
        success: function (data) {
            $(".emp-div").html(data);
        },
        error: function (data) {
            alert(data.responseText);
        }
    });
    return false;
});

$(document).on("submit", "form#edu-form", function () {
    var id = $("#empid").val();
    var data1 = $(this).serialize();
    $.ajax({
        type: 'post',
        data: data1,
        url: '/saveedudetails/' + id,
        success: function (data) {
            $(".edu-div").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
    return false;
});

function AddQualificationForm(id) {
    $.ajax({
        type: 'get',
        url: '/addeduform/' + id,
        success: function (data) {
            $("#addedubtn").attr('disabled', 'disabled');
            $("#newRow").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

function EditEduDetails(id) {
    $.ajax({
        type: 'get',
        url: '/edueditform/' + id,
        success: function (data) {
            $("#edurow-" + id).html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

function DeleteEduDetails(id) {
    var eid = $("#empid").val();
    $.ajax({
        type: 'get',
        url: '/deleteedudetails/' + id + '/' + eid,
        success: function (data) {
            $(".edu-div").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

$(document).on("submit", "form#exp-form", function () {
    var id = $("#empid").val();
    var data1 = $(this).serialize();
    $.ajax({
        type: 'post',
        data: data1,
        url: '/saveexpdetails/' + id,
        success: function (data) {
            $(".exp-div").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
    return false;
});

function AddExperienceForm(id) {
    $.ajax({
        type: 'get',
        url: '/addexpform/' + id,
        success: function (data) {
            $("#addexpbtn").attr('disabled', 'disabled');
            $("#newExpRow").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

function EditExpDetails(id) {
    $.ajax({
        type: 'get',
        url: '/expeditform/' + id,
        success: function (data) {
            $("#exprow-" + id).html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

function DeleteExpDetails(id) {
    var eid = $("#empid").val();
    $.ajax({
        type: 'get',
        url: '/deleteexpdetails/' + id + '/' + eid,
        success: function (data) {
            $(".exp-div").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

$(document).on("submit", "form#family-form", function () {
    var id = $("#empid").val();
    var data1 = $(this).serialize();
    $.ajax({
        type: 'post',
        data: data1,
        url: '/savefamilydetails/' + id,
        success: function (data) {
            $(".family-div").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
    return false;
});

function AddFamilyForm(id) {
    $.ajax({
        type: 'get',
        url: '/addfamilyform/' + id,
        success: function (data) {
            $("#addfamilybtn").attr('disabled', 'disabled');
            $("#newFamilyRow").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

function EditFamilyDetails(id) {
    $.ajax({
        type: 'get',
        url: '/familyeditform/' + id,
        success: function (data) {
            $("#familyrow-" + id).html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

function DeleteFamilyDetails(id) {
    var eid = $("#empid").val();
    $.ajax({
        type: 'get',
        url: '/deletefamilydetails/' + id + '/' + eid,
        success: function (data) {
            $(".family-div").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

function AddEmploee() {
    $.ajax({
        type: "get",
        url: '/addemp',
        success: function (data) {
            $(".main-div").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

function ViewDetails(id) {
    $.ajax({
        type: "get",
        url: '/viewdetails/' + id,
        success: function (data) {
            $(".main-div").html(data);
        }, error: function (data) {
            alert(data.responseText);
        }
    });
}

$(document).on("submit", "form#edit-employee-details", function () {
    $.ajax({
        type: 'post',
        url: '/updatepersonaldetails',
        contentType: false,
        data: new FormData(this),
        processData: false,
        success: function (data) {
            $(".main-div").html(data);
        },
        error: function (data) {
            alert(data.responseText);
        }
    });
    return false;
});