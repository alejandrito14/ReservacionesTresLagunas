/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var url3 = '../Controller/asignarPaqueteActividadController.php';

$(document).ready(function () {

   
  $("#btnguardar").attr("onclick", "guardarP()");

});

function guardarP() {

    var datosformulario = $("#ingresarP").serializeObject();



    $.ajax({
        type: 'POST',
        url: url3 + "/paqueteActividad",
        dataType: "JSON",
        data: JSON.stringify(datosformulario),
        success: function (vresponse) {

//            if (vresponse.messageNumber == '1') {
//                alert(' Se agrego correctamente');
//               
//
//
//            }
        },
        error: function (verror) {
//            alert(' Error al agregar');
           
        }

    });

}

