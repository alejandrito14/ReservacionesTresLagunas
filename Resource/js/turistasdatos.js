var url = '../Controller/turistaController.php';

$(document).ready(function () {
    
    
  
$("#turistas").hide();

 var turista= document.getElementById("turistas").innerHTML
datos(turista);

    
    
    });


function datos(turista){
    

    
     $("#datos").html("");
//
    $.getJSON(url + "/turistas/"+turista, function (vresponse) {
        // console.log(cabanias);
        // alert(vresponse.cabanias.cabanias.length);
        $.each(vresponse.turistas.turistas, function (i, turistas) {
            // console.log(cabanias);
//            var datos = turistas.idusuario + "*" + turistas.nombre + "*" + turistas.apellidoPaterno + "*" + turistas.apellidoMaterno + "*" + turistas.correo + "*" + turistas.numeroTelefono + "*" + turistas.lugarOrigen + "*" + turistas.fechaNacimiento;
            var turistas = "<p>" + turistas.nombre +" "+
                      turistas.apellidoPaterno +" "+
                  turistas.apellidoMaterno + "</p>";
//                 
          
            $(turistas).appendTo("#datos");
        });
    });
//    
    
    
}

