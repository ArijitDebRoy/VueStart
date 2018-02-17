$(document).ready(function () {

 //        //
 //        // $("#dwr").click(function () {
 //        //     if ($(window).width()<=600) {
 //        //     $("#b_logo").css({"display": "none"});
 //        //     }
 //        // });
 // var max_fields      = 5; //maximum input boxes allowed
 //    var wrapper         = $("#inp_wrap"); //Fields wrapper
 //    var add_button      = $("#add"); //Add button ID
 //
 //    var x = 1; //initlal text box count
 //    $(add_button).click(function(e){ //on add input button click
 //        e.preventDefault();
 //        if(x < max_fields){ //max input box allowed
 //            x++; //text box increment
 //            $(wrapper).append('<div class="gparent"><div class="col-lg-4 col-lg-offset-1"><div class="input-group"><span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span><input class="form-control" type="text" name="stn[]" id="pgp" placeholder="Station"  ></div></div><div class="col-lg-2"><div class="input-group"><span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span><input class="form-control adate" type="text" name="enddate[]" placeholder="Arrival Date " data-provide="datepicker" ></div></div><div class="col-lg-2"><div class="input-group"><span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span><input class="form-control atime" type="text" name="endtime[]"  placeholder="Arrival Time" data-provide="datepicker"></div></div><div class="col-lg-2"><button class="btn btn-default remove_field" style="background-color:#399cf9; color:white" type="button">Del</button></div></div>');
 //                              }
 //
 //    });
 //
 //    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
 //        e.preventDefault(); $(this).parent().parent().remove(); x--;
 //    })




$('#drawerExample').drawer({ toggle: false });

$('#drawerExample').drawer({

    toggle: false,

trigger: '[data-toggle="drawer"]'

});

$("#dwr").click(function () {
    var $elem = $('#dwr_i');

    $elem.toggleClass("fa-chevron-right fa-chevron-left");

});

    $("#t1btn").click(function(){
        $(".tab button").css("background-color","");
        $("#t2").css("background-color","#399cf9");
        $("#first").css("display","none");
        $("#second").css("display","block");
    });
    $("#t2btn").click(function(){
        $(".tab button").css("background-color","");
        $("#t3").css("background-color","#399cf9");
        $("#second").css("display","none");
        $("#third").css("display","block");
    });


});


 function openResult(evt,cName,id) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cName).style.display = "block";
       // $("#"+cName).slideDown("slow");
    evt.currentTarget.className += " active";
    $(".tab button").css("background-color","");
    $("#"+id).css("background-color","#399cf9");
}

// function updateResult(evt,cName,id) {
//     var i, tabcontent, tablinks;
//     tabcontent = document.getElementsByClassName("tabcontent");
//     for (i = 0; i < tabcontent.length; i++) {
//         tabcontent[i].style.display = "none";
//     }
//     tablinks = document.getElementsByClassName("tablinks");
//     for (i = 0; i < tablinks.length; i++) {
//         tablinks[i].className = tablinks[i].className.replace(" active", "");
//     }
//     document.getElementById(cName).style.display = "block";
//     // $("#"+cName).slideDown("slow");
//     evt.currentTarget.className += " active";
//     $(".tab button").css("background-color","");
//     $("#"+id).css("background-color","#399cf9");
// }

