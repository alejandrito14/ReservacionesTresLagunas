

var url2 = '../Controller/paqueteController.php';

$(document).ready(function () {

    $("#paquetes").html("");

    $.getJSON(url2 + "/paquetes", function (vresponse2) {



        $.each(vresponse2.paquetes.paquetes, function (i, paquetes) {

            var paquetes =
                    "<div class='col-md-55'>" +
                    "<div class='thumbnail'>" +
                    "<div class='image view view-first'>" +
                    "<img style='width:100%;display: block;' src='../Resource/img/miimagen.jpg 'alt='image'/>" +
                    " </div>" +
                    "<div class='caption'>" +
                    "<h4>Detalles</h4>" +
                    " <p> Nombre: " + paquetes.nombrePaquete + "</p>" +
                    " <p>Costo: $ " + paquetes.tarifa + "</p>" +
                    " <p> Descripción: " + paquetes.detalle + "</p>" +
                    "<p>" +
                    "<input name='paquetes' type='radio' value='" + paquetes.idPaquete + "' />" +
                    " <label>" + paquetes.nombrePaquete + "</label>" +
                    "</p>" +
                    " </div>" +
                    " </div>" +
                    "</div>   ";

            $(paquetes).appendTo("#paquetes");

        });

    });

});
