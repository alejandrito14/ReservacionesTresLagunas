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
                    "<input type='file' name='archivo' style='font-size: 80%' id='archivo'accept='application/pdf' />"+
                    "<button type='button' class='btn btn-success btn-sm' id='botonSubir'  onclick='uploadAjax(" + '"' +reservaciones.idreservacion + '"' + ")' >Subir Archivo</button>"+
                    "</br>"+
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

function uploadAjax(idreservacion){
    
        var inputFileImage = document.getElementById("archivo");

        var file = inputFileImage.files[0];
        
        if(inputFileImage==''){
             alert("No eligio ningun archivo");
         }

        var data = new FormData();

        data.append("archivo",file);

         var message = ""; 
        //hacemos la petición ajax  
        $.ajax({
            url: url6 +"/"+ idreservacion+ "/"+inputFileImage,  
            type: 'POST',
            // Form data
            //datos del formulario
            data: data,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
                message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
                showMessage(message)        
            },
            //una vez finalizado correctamente
            success: function(vresponse){
                 if (vresponse.messageNumber == '0') {
               
                 alert("No se adjunto archivo");
                }
                
                
            },
            //si ha ocurrido un error
            error: function(){
                message = $("<span class='error'>Ha ocurrido un error.</span>");
                showMessage(message);
            }
        });
  

}

function showMessage(message){
    $(".messages").html("").show();
    $(".messages").html(message);
}
 
//comprobamos si el archivo a subir es una imagen
//para visualizarla una vez haya subido
function isImage(extension)
{
    switch(extension.toLowerCase()) 
    {
        case 'pdf':
            return true;
        break;
        default:
            return false;
        break;
    }
}