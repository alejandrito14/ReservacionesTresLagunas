

var url2 = '../Controller/paqueteController.php';

$(document).ready(function () {
cargarpaquetes();
   
});


function cargarpaquetes(){
    
    
     $("#paquetes").html("");

   $.getJSON(url2 + "/paquetes", function (vresponse2) {
          
      
        
        $.each(vresponse2.paquetes.paquetes, function (i, paquetes) {

            var paquetes = 
                    "<div class='col-md-55'>"+
                    "<div class='image view view-first'>"+
            "<img style='width: 100%;  'class='img-thumbnail' src='../Resource/img/miimagen.jpg 'alt='image'/>" +
                    " </div>" +
                    "<div class='caption'>" +
                    "<h4>Detalles</h4>"+
                    " <p> Nombre: " + paquetes.nombrePaquete + "</p>" +
                    " <p>Costo: $ " + paquetes.tarifa + "</p>" +
                    " <p> Descripción: " + paquetes.detalle + "</p>" +
                   "</br>"+                 
                   "<button type='button 'class='btn btn-success btn-sm' data-toggle='modal' data-target='#Detalles'  onclick='detalles(" + '"' + paquetes.idPaquete + '"' + ")' >Ver actividades</button> "+

                    " </div>" +
                 


                    "</div>   ";

            $(paquetes).appendTo("#paquetes");

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
