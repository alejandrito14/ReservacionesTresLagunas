

var url2 = '../Controller/paqueteController.php';

$(document).ready(function () {
    cargarTabla();

    $("#btnguardar").attr("onclick", "guardarP()");


});


function cargarTabla() {


    $("#tablaPaquetes tbody").html("");

    $.getJSON(url2 + "/paquetes", function (vresponse) {
        // console.log(cabanias);
        // 
        // alert(vresponse.cabanias.cabanias.length);

        $.each(vresponse.paquetes.paquetes, function (i, paquetes) {
            // console.log(cabanias);
            var datos = paquetes.idPaquete + "*" + paquetes.nombrePaquete + "*" + paquetes.tarifa + "*" + paquetes.detalle;


            var paquetes = "<tr>"

                    + "<td>" + paquetes.idPaquete + "</td>"
                    + "<td>" + paquetes.nombrePaquete + "</td>"
                    + "<td> $ " + paquetes.tarifa + "</td>"
                    + "<td> " + paquetes.detalle + "</td>"
                    + "<td><button type='button 'class='btn btn-danger btn-sm'  onclick='eliminar(" + '"' + paquetes.idPaquete + '"' + ")' >Eliminar</button> <button type='button 'class='btn btn-success btn-sm' data-toggle='modal' data-target='#Detalles'  onclick='detalles(" + '"' + paquetes.idPaquete + '"' + ")' >Ver actividades</button> <buton type='button ' class='btn btn-info btn-sm' data-toggle='modal' data-target='#EditarP' onclick='mostrar(" + '"' + datos + '"' + ")' >Editar</button>   </td>"
                    + "</tr>";

            $(paquetes).appendTo("#tablaPaquetes tbody");

        });

    });




}


function detalles(id) {
        $('#content').html('<div><img src="../Resource/img/loading2.gif"/></div>');

  $("#veractividades").html("");
    $.getJSON(url2 + "/paquetesactividades/" + id, function (vresponse) {
        // console.log(cabanias);
        // 
        // alert(vresponse.cabanias.cabanias.length);
         
 $('#content').fadeIn(1000).html(vresponse);

        $.each(vresponse.actividades.actividades, function (i, actividades) {
            // console.log(cabanias);

            var datos = actividades.idActividad + "*" + actividades.nombreActividad + "*" + actividades.tarifa + "*" + actividades.detalle;
            var actividades = "<div>"
                    + "<p> Actividad :" + actividades.nombreActividad + "</p>"
                    + "<p> Costo $ " + actividades.tarifa + "</p>"
                    + "</div>";
            
            $(actividades).appendTo("#veractividades");

        });
        

    });

}

function mostrar(datos) {

    var d = datos.split("*");
    $("#paquete").val(d[0]);
    $("#txtnombre").val(d[1]);
    $("#txttarifa").val(d[2]);
    $("#txtdetalle").val(d[3]);

}





function eliminar(id) {

    var pregunta = confirm('¿Esta seguro de eliminar este registro?');
    if (pregunta == true) {
        $.ajax({
            type: 'DELETE',
            url: url2 + "/paquetes/" + id,
            success: function (vresponse) {
                alert(' Se eiimino correctamente');

                cargarTabla();
            },
            error: function (verror) {
                alert('Error al eliminar');
            }

        });
        return false;
    } else {
        return false;
    }


}


function editar(id) {

    $.ajax({
        type: 'GET',
        url: url2 + "/paquetes/" + id,
        success: function (vresponse) {

        },
        error: function (verror) {
            alert('delete error');
        }

    });


}

function guardarP() {

    var datosformulario = $("#ingresarP").serializeObject();



    $.ajax({
        type: 'POST',
        url: url2 + "/paqueteActividad",
        dataType: "JSON",
        data: JSON.stringify(datosformulario),
        success: function (vresponse) {

            if (vresponse.messageNumber == '1') {
                alert(' Se agrego paquete correctamente ');



            }
        },
        error: function (verror) {
            alert(' Error al agregar');

        }

    });

}

