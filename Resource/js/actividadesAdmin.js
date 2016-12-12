

var url = '../Controller/actividadController.php';

$(document).ready(function () {

    cargarTabla();
    //$("#btneditar").attr("onclick", "editarC()");

    $("#btnguardar").attr("onclick", "guardarA()");
    $("#btnEditar").attr("onclick", "editarA()");



});



function cargarTabla() {
    $("#tablaActividad tbody").html("");

    $.getJSON(url + "/actividades", function (vresponse) {
        // console.log(cabanias);
        // 
        // alert(vresponse.cabanias.cabanias.length);


        $.each(vresponse.actividades.actividades, function (i, actividades) {
            // console.log(cabanias);

            var datos = actividades.idActividad + "*" + actividades.nombreActividad + "*" + actividades.tarifa + "*" + actividades.detalle;
            var actividades = "<tr>"

                    + "<td>" + actividades.idActividad + "</td>"
                    + "<td>" + actividades.nombreActividad + "</td>"
                    + "<td> $ " + actividades.tarifa + "</td>"
                    + "<td> " + actividades.detalle + "</td>"
                    + "<td><button type='button 'class='btn btn-danger btn-sm'  onclick='eliminar(" + '"' + actividades.idActividad + '"' + ")' >Eliminar</button> <buton type='button ' class='btn btn-info btn-sm' data-toggle='modal' data-target='#EditarP' onclick='mostrar(" + '"' + datos + '"' + ");' >Editar</button> </td>"
                    + "</tr>";

            $(actividades).appendTo("#tablaActividad tbody");

        });

    });

}

function  borrarform() {


    $("#txtnombre").val("");
    $("#txttarifa").val("");
    $("#txtdetalle").val("");

}

function mostrar(datos) {

    var d = datos.split("*");
    $("#actividad").val(d[0]);
    $("#nombre").val(d[1]);
    $("#tarifa").val(d[2]);
    $("#detalle").val(d[3]);

}

function guardarA() {

    var datosformulario = $("#formactividad").serializeObject();


    $.ajax({
        type: 'POST',
        url: url + "/actividades",
        dataType: "JSON",
        data: JSON.stringify(datosformulario),
        success: function (vresponse) {

            if (vresponse.messageNumber == '1') {
                alert(' Se agrego correctamente');
                borrarform();
                cargarTabla();


            }

        },
        error: function (verror) {
            alert("Error al agregar");

        }

    });


}

function editarA() {

    var idactividad = $("#actividad").val();

    var datosform = $("#formEditar").serializeObject();


    $.ajax({
        type: 'PUT',
        url: url + "/actividades/" + idactividad,
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




function eliminar(id) {

    var pregunta = confirm('¿Esta seguro de eliminar este registro?');
    if (pregunta == true) {
        $.ajax({
            type: 'DELETE',
            url: url + "/actividades/" + id,
            success: function (vresponse) {
                alert(' Se elimino correctamente');

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