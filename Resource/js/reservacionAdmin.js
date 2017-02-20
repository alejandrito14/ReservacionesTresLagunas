var url2 = '../Controller/reservacionController.php';

$(document).ready(function () {
    cargarTabla();

    $("#btnguardar").attr("onclick", "guardarP()");
    $("#btneditar").attr("onclick","Editar()");

});


function cargarTabla() {


    $("#tablaReservaciones tbody").html("");

    $.getJSON(url2 + "/reservaciones", function (vresponse) {
        // console.log(cabanias);
        // 
        // alert(vresponse.cabanias.cabanias.length);

        $.each(vresponse.reservaciones.reservaciones, function (i, reservaciones) {
            // console.log(cabanias);
           var datos = reservaciones.idreservacion + "*" + reservaciones.fechaEntrada + "*" + reservaciones.fechaSalida;
           var reservaciones = "<tr>"

                    + "<td>" + reservaciones.idreservacion + "</td>"
                    + "<td>" + reservaciones.fechaEntrada + "</td>"
                    + "<td> " + reservaciones.fechaSalida + "</td>"
                    + "<td> " + reservaciones.numeroDeActividades + "</td>"
                    + "<td> " + reservaciones.cantidadPersonas + " personas</td>"
                    + "<td> <a href='"+reservaciones.comprobantePago+ "' class='btn btn-success' role='button' target='_blank' >Visualizar</a></td>"
                    + "<td> " + reservaciones.idestadoReservacion+ "</td>"
                    + "<td><buton  type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#EditarC' onclick='mostrar(" + '"' + datos + '"' + ");'  >Editar</button> </td>"
                    + "</tr>";

            $(reservaciones).appendTo("#tablaReservaciones tbody");

        });

    });

}

function mostrar(datos) {

    var d = datos.split("*");
    $("#txtreservacion").val(d[0]);
    $("#txtfechaentrada").val(d[1]);
    $("#txtfechasalida").val(d[2]);
  
    

}

function Editar(){
    
   

    var datosform = $("#editarReservacion").serializeObject();


    $.ajax({
        type: 'PUT',
        url: url2 + "/reservacion",
        dataType: "JSON",
        data: JSON.stringify(datosform),
        success: function (vresponse) {

            if (vresponse.messageNumber == '1') {

                alert("Se edito correctamente");
                cargarTabla();
            }

        },
        error: function (verror) {
            alert("Error al editar");


        }

    });
    
}
