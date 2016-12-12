var url = '../Controller/actividadController.php';
 var tarifa = 0;
$(document).ready(function () {
   
    cargarselect();
    //$("#btneditar").attr("onclick", "editarC()");



    var max_fields = 5;
    var wrapper = $('#select');
    var add_button = $('#agregaactividades');
    var x = 0;
    $(add_button).click(function () { //on add input button click

        if (x < max_fields) {
            x++;
            $(wrapper).clone().insertAfter(wrapper).append(' <a class="btn btn-info  remove_field  " role="button"> - </a> ');

        }



    });

    $(document).on("click", ".remove_field", function () { //user click on remove text

        $(this).parent().remove();

    });

});


function  cargarselect() {
    $("#actividades").html("");
    $.getJSON(url + "/actividades", function (vresponse) {
        // console.log(cabanias);
        // 
        // alert(vresponse.cabanias.cabanias.length);


        $.each(vresponse.actividades.actividades, function (i, actividades) {
            // console.log(cabanias);
             
             
            var actividades = "<option value=" + actividades.idActividad + ">" + actividades.nombreActividad + " </option>";
            $(actividades).appendTo("#actividades");
            
           
          
        });
    });
}


