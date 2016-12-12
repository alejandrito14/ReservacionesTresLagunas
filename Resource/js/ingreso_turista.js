/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var url = '../Controller/turistaController.php';
$(document).ready(function () {
    $("#verificar").hide();
      $("#alert").hide();
    
   
    $("#btningreso").attr("onclick", "ingreso()");

//    $("#formingreso").validate({
//        rules:
//                {
//                    txtcontrasena: {
//                        required: true,
//                    },
//                    txtemail: {
//                        required: true,
//                        email: true
//                    },
//                },
//        messages:
//                {
//                    txtcontrasena: {
//                        required: "please enter your password"
//                    },
//                    txtemail: "please enter your email address",
//                },
//        submitHandler: ingreso
});

function ingreso()
{
    var timeSlide = 1000;

    // var datosform = $("#formingreso").serializeObject();
    var correo = $("#txtemail").val();
    var contra = $("#txtcontrasena").val();
    $('.box-info, .box-success, .box-alert, .box-error').slideUp(timeSlide);
    $('#timer').hide(0);
//por el momento no mostramos el ajax
    $('#timer').css('display', 'none');
    setTimeout(function () {
         $('#timer').fadeIn(300);
         
         
         
        if ($('#txtemail').val() != "" && $('#txtcontrasena').val() != "") {

       

            
            $.ajax({
                type: 'GET',
                url: url + "/login/" + correo + "/" + contra,
                dataType: "JSON",
                beforeSend: function ()
                {

                    $("#btningreso").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; entrando ...');
                },
                success: function (vresponse) {

                    if (vresponse.messageNumber == '1') {

                        location.href = '../View/PrincipalTurista.php';

                    }
                    else
                    {

                        setTimeout(showTooltip, 1000);
                        normal();

                    }

                },
                error: function (verror) {

                    if (verror.messageNumber == '-100') {


                        location.href = '../View/login-turista.php';

                    }

                }


            });



            //caso cantrario si los campos estan vacios debemos llenarlos
        } 
        
        
        
        
        
        
        
        else {
                                    setTimeout(show, 1000);

            
//            $('#alertBoxes').html('<div class="box-error"></div>');
//            $('.box-error').hide(0).html('Los campos estan vacios');
//            $('.box-error').slideDown(timeSlide);
//            $('#timer').fadeOut(300);
        }
    }, timeSlide);


 return false;

}

function hideTooltip()
{
    $("#verificar").hide("slow");
}

function showTooltip()
{
    $("#verificar").show("slow");

    setTimeout(hideTooltip, 3000);
}

function show()
{
    $("#alert").show("slow");

    setTimeout(hide, 3000);
}

function hide()
{
    $("#alert").hide("slow");
}
function normal() {

    $("#btningreso").html('INGRESAR');
    $("#txtemail").val("");
    $("#txtcontrasena").val("");


}










