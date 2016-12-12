

var url3 = '../Controller/actividadController.php';

$(document).ready(function () {

    $("#actividades").html("");

   $.getJSON(url3 + "/actividades", function (vresponse3) {
          
      
        
        $.each(vresponse3.actividades.actividades, function (i, actividades) {

            var actividades = 
                    "<div class='col-md-55'>"+
                     "<div class='thumbnail'>" +
                    "<div class='image view view-first'>"+
            "<img style='width: 100%;display: block;'  src='../Resource/img/miimagen.jpg 'alt='image'/>" +
                    " </div>" +
                    "<div class='caption'>" +
                    "<h4>Detalles</h4>"+
                    " <p> Nombre: " + actividades.nombreActividad + "</p>" +
                    " <p>Costo: $ " + actividades.tarifa + "</p>" +
                    " <p> Descripción: " +actividades.detalle + "</p>" +
                    "<p>" +
                    " <input type='checkbox' id='" + actividades.idActividad + "' />" +
                    " <label for='" + actividades.idActividad + "'>" + actividades.nombreActividad + "  </label>" +
                    " </p>" +

                    " </div>" +
                  " </div>" +
                 


                    "</div>   ";

            $(actividades).appendTo("#actividades");

        });

    });

});
