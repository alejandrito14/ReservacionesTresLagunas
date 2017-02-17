var url6 = '../Controller/reservacionController.php';

$(document).ready(function () {

mostrarReservaciones();

});


function mostrarReservaciones(){
     var turista= document.getElementById("turistas").innerHTML

    $("#misreservaciones").html("");

    $.getJSON(url6 + "/reservaciones/"+turista, function (vresponse2) {



        $.each(vresponse2.reservaciones.reservaciones, function (i, reservaciones) {

            var reservaciones =
                    
                    "<div class='col-md-55'>" +
                    "<div class='thumbnail'>" +
                    "<center><h3>Reservacion</h3></center>"+
                    "<div class='image view view-first'>" +
                    " </div>" +
                    "<div class='caption'>" +
                    "<h4>Detalles</h4>" +
                    " <p> Folio: " + reservaciones.idreservacion + "</p>" +
                    " <p>Fecha Entrada:  " + reservaciones.fechaEntrada + "</p>" +
                    " <p> Fecha Salida: " + reservaciones.fechaSalida + "</p>" +
                    "<p> Añadir Baucher</p>"+
                    "<input id='file-3' type='file' multiple=true>"+
                    " <a href='Reportes/Referencia.php?folio="+reservaciones.idreservacion+ "&t=pdf' target='_blank'><span><img src='../Resource/img/icono-pdf.png '/></span></a> " +
                   "<p>Descarga Aqui tu referencia</p>"+        
                    "<p>" +
                   
                    "</p>" +
                    " </div>" +
                    " </div>" +
                    "</div>   ";

            $(reservaciones).appendTo("#misreservaciones");

        });

    });

    
}

function imprimir(id){
    
    alert(id);
}