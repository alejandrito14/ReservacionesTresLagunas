
var url='../Controller/turistaController.php';
$(document).ready(function(){
    $("#siguiente2").hide();
     $("#siguiente").hide();
     $("#seleccionar").hide();
   $("#btnconsulta").attr("onclick","consulta()");
   
});



function consulta()
 {
     
     
  $("#reservacion").hide();
  $("#seleccionar").show();
 $("#btnsiguiente").attr("onclick","siguiente()");
    
  
//    var datosform=$("#formregistro").serializeObject();
//  
//    $.ajax({
//       
//         type:'POST',
//          url:url+"/turistas",
//          dataType:"JSON",
//          data:JSON.stringify(datosform),
//         succes:function(vresponse){
//          
//
//        
//         },
//        
//        error:function(verror){
//       
//         }
//    
//    });

}


function siguiente(){
    $("#seleccionar").hide();
    $("#siguiente").show();
     $("#btnsiguiente2").attr("onclick","siguiente2()");

    
    
}

function siguiente2(){
    $("#seleccionar").hide();
    $("#siguiente").hide();
    $("#siguiente2").show();
}


/* $.validator.setDefaults({
    errorClass: 'invalid',
    validClass: "valid",
    errorPlacement: function (error, element) {
        $(element)
            .closest("form")
            .find("label[for='" + element.attr("id") + "']")
            .attr('data-error', error.text());
    },
    submitHandler: function (form) {
        console.log('form ok');
    }
});

$("#formregistro").validate({
    rules: {
        dateField: {
            date: true
        }
        
    }
});*/
