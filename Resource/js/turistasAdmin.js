

var url = '../Controller/turistaController.php';

$(document).ready(function () {
    cargarTabla();
    $("#btneditar").attr("onclick", "editarT()");

    $("#btnguardar").attr("onclick", "guardarT()");

});



function cargarTabla() {
    $("#tablaTuristas tbody").html("");

    $.getJSON(url + "/turistas", function (vresponse) {
        // console.log(cabanias);
        // alert(vresponse.cabanias.cabanias.length);
        $.each(vresponse.turistas.turistas, function (i, turistas) {
            // console.log(cabanias);
            var datos = turistas.idusuario + "*" + turistas.nombre + "*" + turistas.apellidoPaterno + "*" + turistas.apellidoMaterno + "*" + turistas.correo + "*" + turistas.numeroTelefono + "*" + turistas.lugarOrigen + "*" + turistas.fechaNacimiento;
            var turistas = "<tr>"
                    + "<td>" + turistas.nombre + "</td>"
                    + "<td>" + turistas.apellidoPaterno + "</td>"
                    + "<td>" + turistas.apellidoMaterno + "</td>"
                    + "<td> " + turistas.correo + "</td>"
                    + "<td> " + turistas.numeroTelefono + "</td>"
                    + "<td> " + turistas.lugarOrigen + "</td>"
                    + "<td> " + turistas.fechaNacimiento + "</td>"


                    + "<td><button type='button 'class='btn btn-danger btn-sm' '  onclick='eliminar(" + '"' + turistas.idusuario + '"' + ")'>Eliminar</button> <buton  type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#EditarT' onclick='mostrar(" + '"' + datos + '"' + ");'  >Editar</button> </td>"
                    + "</tr>";
            $(turistas).appendTo("#tablaTuristas tbody");
        });
    });
}




function mostrar(datos) {
  //  alert(datos);

    var d = datos.split("*");
    $("#turista").val(d[0]);
    $("#nombret").val(d[1]);
    $("#apellidop").val(d[2]);
    $("#apelidom").val(d[3]);
    $("#correo").val(d[4]);
    $("#telefono").val(d[5]);
    $("#ciudad").val(d[6]);
    $("#fecha").val(d[7]);




}

function guardarT() {

    var datosformulario = $("#formcabania").serializeObject();


    $.ajax({
        type: 'POST',
        url: url + "/cabanias",
        dataType: "JSON",
        data: JSON.stringify(datosformulario),
        succes: function (vresponse) {


            alert("Se agrego un registro");
            cargarTabla();


        },
        error: function (verror) {

        }

    });

}

function eliminar(id) {

    var pregunta = confirm('¿Esta seguro de eliminar este registro?');
    if (pregunta == true) {
        $.ajax({
            type: 'DELETE',
            url: url + "/turistas/" + id,
            success: function (vresponse) {
                alert(' deleted successfully');

                cargarTabla();
            },
            error: function (verror) {
                alert('delete error');
            }

        });
        return false;
    } else {
        return false;
    }


}

function editarT() {

    var idcabania = $("#turista").val();

    var datosform = $("#editarCabania").serializeObject();


    $.ajax({
        type: 'PUT',
        url: url + "/cabanias/" + idcabania,
        dataType: "JSON",
        data: JSON.stringify(datosform),
    }).done(function (vresponse) {

        if (vresponse.messageNumber) {
            cargarTabla();
            alert("Se edito correctamente");
        }
//
//        },
//        error: function (verror) {
//
//        }

    });



}