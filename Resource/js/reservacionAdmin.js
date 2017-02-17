var url2 = '../Controller/reservacionController.php';

$(document).ready(function () {
    cargarTabla();

    $("#btnguardar").attr("onclick", "guardarP()");


});


function cargarTabla() {


    $("#tablaReservaciones tbody").html("");

    $.getJSON(url2 + "/reservaciones", function (vresponse) {
        // console.log(cabanias);
        // 
        // alert(vresponse.cabanias.cabanias.length);

        $.each(vresponse.reservaciones.reservaciones, function (i, reservaciones) {
            // console.log(cabanias);
           // var datos = paquetes.idPaquete + "*" + paquetes.nombrePaquete + "*" + paquetes.tarifa + "*" + paquetes.detalle;


            var reservaciones = "<tr>"

                    + "<td>" + reservaciones.idreservacion + "</td>"
                    + "<td>" + reservaciones.fechaEntrada + "</td>"
                    + "<td> $ " + reservaciones.fechaSalida + "</td>"
                    + "<td> " + reservaciones.numeroDeActividades + "</td>"
                    + "<td> " + reservaciones.cantidadPersonas + "</td>"
                    + "<td> " +reservaciones.comprobantePago + "</td>"
                    + "<td> " + reservaciones.idestadoReservacion+ "</td>"
                    + "<td> <button>Ver detalle</button></td>"



                    + "</tr>";

            $(reservaciones).appendTo("#tablaReservaciones tbody");

        });

    });




}


