$(window).on("click",function(){

$(".btn-delete").click(function(){


var idcurso = $(this).data('id');
  var row =  $(this).parents('tr');

  
    row.fadeOut(1000);

var token= $('input[name="_token"]').val();

$.ajax({
  headers:{'X-CSRF-TOKEN':token },		
  type: "DELETE",
  url: "cursos/" +idcurso,
  dataType:'json',
  success: function (data){

	alert("Se elimino correctamente");

	},

error:function(error){

alert("error");
	}	

});








		});





});
     
         
        


















