

var url = '../Controller/cabaniaController.php';

$(document).ready(function () {
    // buscarlistar('');
    cargarTabla();
  
    $("#btneditar").attr("onclick", "editarC()");

    $("#btnguardar").attr("onclick", "guardarc()");
    
    
 

});





function cargarTabla() {
    $("#tablaCabanias tbody").html("");

    $.getJSON(url + "/cabanias", function (vresponse) {
        // console.log(cabanias);
        // alert(vresponse.cabanias.cabanias.length);
        $.each(vresponse.cabanias.cabanias, function (i, cabanias) {
            // console.log(cabanias);
            var datos = cabanias.idcabania + "*" + cabanias.nombre + "*" + cabanias.descripcion + "*" + cabanias.tarifa+"*"+cabanias.cantidadPersonas;
            var cabanas = "<tr>"
                    + "<td>" + cabanias.idcabania + "</td>"
                    + "<td>" + cabanias.nombre + "</td>"
                    + "<td>" + cabanias.descripcion + "</td>"
                    + "<td> $" + cabanias.tarifa + "</td>"
                    + "<td> " + cabanias.cantidadPersonas + " personas </td>"

                    + "<td><button type='button 'class='btn btn-danger btn-sm' '  onclick='eliminar(" + '"' + cabanias.idcabania + '"' + ")'>Eliminar</button> <buton  type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#EditarC' onclick='mostrar(" + '"' + datos + '"' + ");'  >Editar</button> </td>"
                    + "</tr>";
            $(cabanas).appendTo("#tablaCabanias tbody");
        });
    });
}

function buscarlistar(nombre) {

    var nombre = $("#buscar").val();

    $("#tablaCabanias tbody").html("");

    $.getJSON(url + "/cabanias" + nombre, function (vresponse) {
        // console.log(cabanias);
        // alert(vresponse.cabanias.cabanias.length);
        $.each(vresponse.cabanias.cabanias, function (i, cabanias) {
            // console.log(cabanias);
            var datos = cabanias.idcabania + "*" + cabanias.nombre + "*" + cabanias.descripcion + "*" + cabanias.tarifa;
            var cabanas = "<tr>"
                    + "<td>" + cabanias.idcabania + "</td>"
                    + "<td>" + cabanias.nombre + "</td>"
                    + "<td>" + cabanias.descripcion + "</td>"
                    + "<td> $" + cabanias.tarifa + "</td>"
                    + "<td><button type='button 'class='btn btn-danger btn-sm' '  onclick='eliminar(" + '"' + cabanias.idcabania + '"' + ")'>Eliminar</button> <buton  type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#EditarC' onclick='mostrar(" + '"' + datos + '"' + ");'  >Editar</button> </td>"
                    + "</tr>";
            $(cabanas).appendTo("#tablaCabanias tbody");
        });
    });



//        $.ajax({
//            type: 'GET',
//            url: url + "/cabanias/" + idcabania,
//            success: function (vresponse) {
//              
//              
//              
//            },
//            error: function (verror) {
//                alert('delete error');
//            }
//
//        });


}


function mostrar(datos) {

    var d = datos.split("*");
    $("#cabania").val(d[0]);
    $("#nombrec").val(d[1]);
    $("#descripcion").val(d[2]);
    $("#tarifa").val(d[3]);
     $("#cantidad").val(d[4]);
    

}

function borrarform() {


    $("#txtnombre").val("");
    $("#txtdescripcion").val("");
    $("#txttarifa").val("");
     $("#txtcantidad").val("");


}

function guardarc() {

    var datosformulario = $("#formcabania").serializeObject();


    $.ajax({
        type: 'POST',
        url: url + "/cabanias",
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
            alert(' Error al agregar');
            cargarTabla();
        }

    });

}

function eliminar(id) {

    var pregunta = confirm('¿Esta seguro de eliminar este registro?');
    if (pregunta == true) {
        $.ajax({
            type: 'DELETE',
            url: url + "/cabanias/" + id,
            success: function (vresponse) {
                alert(' Registro Eliminado');

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

function editarC() {

    var idcabania = $("#cabania").val();

    var datosform = $("#editarCabania").serializeObject();


    $.ajax({
        type: 'PUT',
        url: url + "/cabanias/" + idcabania,
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