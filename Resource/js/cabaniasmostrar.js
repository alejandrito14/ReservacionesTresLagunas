

var cabanias = '../Controller/cabaniaController.php';

$(document).ready(function () {

    cargarCabanias();
});


function cargarCabanias() {

    $("#cabanias").html("");

    $.getJSON(cabanias + "/cabanias", function (vresponse) {



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
                    " <buton type='button ' class='btn btn-info  ' data-toggle='modal' data-target='#Detalles' onclick='mostrar(" + '"' + datos + '"' + ");' >Mas información</button>" +
                    " </div>" +
                    "</div>   " +
                    "</div>   ";

            $(cabanas).appendTo("#cabanias");

        });

    });


}




function mostrar(datos) {

    var d = datos.split("*");

    $("#nombrec").val(d[0]);
    $("#descripcion").val(d[1]);
    $("#tarifa").val(d[2]);
    $("#cpersonas").val(d[3]);


}