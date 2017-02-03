
var url4 = '../Controller/cabaniaController.php';
var url5='../Controller/reservacionController.php';
$(document).ready(function(){
 
	
    
  $("#btnreservar").attr("onclick", "reservacion()");

    $("#siguiente2").hide();
     $("#siguiente").hide();
     $("#seleccionar").hide();
     $("#vacio").hide();
   $("#btnconsulta").attr("onclick","consulta()");
   
//   $(function(){
//    var pickerOpts = {
//        dateFormat: "yy-mm-dd"
//    };  
//    $("#txtfechaentrada").datepicker(pickerOpts);
//    $("#txtfechasalida").datepicker(pickerOpts);
//
//});
   
});
 function isEmptyJSON(vresponse) {
            for (var i in vresponse) {
                return false;
            }
            return true;
        }


function consulta()
 {
 
  var fechaentrada=$("#txtfechaentrada").val(); 
  var fechasalida=$("#txtfechasalida").val();
  var cantidad=$("#cantidad").val();
  
  
//  if(fechaentrada==''){
//      
//      alert("Ingresa una fecha entrada");return false;
//      
//      
//      
//    if(fechasalida==' '){
//              
//              alert("ingresar una fecha de salida");return false;
//          }
//              
//     if(cantidad==' '){
//                  alert("ingresa cantidad de personas");return false;
//                  
//              }
//          }else{
//                  
//                  alert("campos llenos");
//                  
//                  
//              }
//          
//          
      
  
  
  $('#content').html('<div><img src="../Resource/img/loading2.gif"/></div>');  
 
  
  $("#reservacion").hide();
  $("#seleccionar").show();
        $("#cabanias").html("");

    $.getJSON(url4 + "/cabanias/"+fechaentrada+"/"+fechasalida+"/"+cantidad, function (vresponse) {

 $('#content').fadeIn(1000).html(vresponse);
$('#content').hide();
        


        if(isEmptyJSON(vresponse)==false){
       

    


        $.each(vresponse.cabanias.cabanias, function (i, cabanias) {
            var datos = cabanias.nombre + "*" + cabanias.descripcion + "*" + cabanias.tarifa + "*" + cabanias.cantidadPersonas;

            var cabanas =
                    "<div class='col-md-55'>" +
                    "<div class='thumbnail'>" +
                    "<div class='image view view-first'>" +
                    "<img style='width:100%;display: block;' src='../Resource/images/02.jpg 'alt='image'/>" +
                    " </div>" +
                    "<div class='caption'>" +
                    "<h4>Detalles</h4>" +
                    " <p> Nombre: " + cabanias.nombre + "</p>" +
                    " <p>Costo: $ " + cabanias.tarifa + "</p>" +
                    "</br>" +
                    "<p>" +
                     "<input name='cabanias' type='radio' value='" + cabanias.idcabania + "' />" +
                    " <buton type='button ' class='btn btn-info  ' data-toggle='modal' data-target='#Detalles' onclick='mostrar(" + '"' + datos + '"' + ");' >Mas información</button>" +
                    " </div>" +
                    "</div>   " +
                    "</div>   ";

            $(cabanas).appendTo("#cabanias");

        });
        
        }else{
    
      $("#seleccionar").hide();
        $("#vacio").show();
   
        $('#content2').text("No hay cabañas disponibles en las fechas señalas").show();

        }

        

    });

 $("#btnsiguiente").attr("onclick","siguiente()");





}
function mostrar(datos) {

    var d = datos.split("*");

    $("#nombrec").val(d[0]);
    $("#descripcion").val(d[1]);
    $("#tarifa").val(d[2]);
    $("#cpersonas").val(d[3]);


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

function reservacion(){
    
   
     var datosformulario = $("#formreservacion").serializeObject();
   
    $.ajax({
        type: 'POST',
        url: url5 + "/reservacion",
        dataType: "JSON",
        data: JSON.stringify(datosformulario),
        success: function (vresponse) {
           if (vresponse.messageNumber == '1') {
                alert(' Se agrego reservacion correctamente ');


         }
        },
        error: function (verror) {
            alert(' Error al agregar');

        }
//
    });
    
    
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
