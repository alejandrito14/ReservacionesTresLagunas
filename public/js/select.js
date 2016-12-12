$(document).ready(function(){

	var max_fields = 5;
				var wrapper = $(".referencia");
				var add_button = $('#btn-agregar-empresa');
				var x = 0;
				
				$(add_button).click(function () { //on add input button click
				  $('#empresan').empty();
				$('#calle_empresa').empty();
			if (x < max_fields) {
					x++;

			  
						$(wrapper).clone().insertAfter(wrapper).append(' <a class="btn btn-info remove_field " role="button"> - </a> ');
					}
					/*	if (x < max_fields) { //max input box allowed
								x++; //text box increment
                $(wrapper).append('<div><div><h4>Referencias </h4><div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label col-xs-5 for" for="empresa">Empresa</label><input id="empresan" type="text" class="form-control"></div>     <h4>Dirección</h4> 															<div class="form-group"><label class="control-label " id="pais">Pais </label><select id="pais" name="pais[]" class="form-control   "><option value="" disabled selected></option><option value="1"> Mexico </option></select></div> <div class="form-group"><label class="control-label " id="estados">Estado </label><select id="edo" name="edo[]" class="form-control   "><option value="" disabled selected></option><option value="1"> Chiapas </option></select></div></div> <div class="col-md-4"><div class="form-group"><label  class="control-label" id="municipio">Municipio</label><select id="muni" name="muni[]" class="form-control   "><option value="" disabled selected></option><option value="1"> Tuxtla Gutierrez </option></select></div> <div class="form-group"><label class="control-label " id="ciuda">Ciudad </label><select id="ciuda" name="ciuda[]" class="form-control"><option value="" disabled selected></option><option value="1"> Tuxtla gutierrez </option></select></div>  <div class="form-group"><label class="control-label  " id="local" >Localidad </label><select id="local" name="local[]" class="form-control   "><option value="" disabled selected></option><option value="1"> Tuxtla Gutierrez </option></select></div>  <div class="form-group"><label class="control-label " id="callea" >Calle</label><input id="calle_empresa" name="calle_empresa[]" type="text" class="form-control "></div></div>  </div></div>  <a class="btn btn-info remove_field " role="button">Remove</a>  </div></div>'); //add input box
								//add input box
						}*/
				});

			$(document).on("click", ".remove_field", function () { //user click on remove text
			
						$(this).parent().remove();
				
				});



$('#paises').change(function(){
	$.get('estados/'+$('#paises').val(),function(respuesta){

	//console.log(respuesta);	
		$('#estados').empty();
		respuesta.forEach(element => {
			$('#estados').append(`<option value="0" disable> Selecciona Estado</option>`+`<option value=${element.idcat_estado}> ${element.estado} </option>`);

   				  });
			});

		});

	$('#estados').change(function(){
		$.get('municipios/'+$('#estados').val(),function(respuestados){
		//console.log(respuestados);	
		$('#municipios').empty();
		$('#municipios').append(`<option value="0" disable> Selecciona Municipio</option>`);
		respuestados.forEach(elemento => {
			$('#municipios').append(`<option value=${elemento.id_municipio}> ${elemento.municipio} </option>`);
				
								});	
							});
						});

		$('#municipios').change(function(){
							$.get('ciudades/'+$('#municipios').val(),function(respuestatres){
							//console.log(respuestatres);	
								$('#ciudades').empty();

									$('#ciudades').append(`<option value="0" disable> Selecciona ciudad</option>`)
									respuestatres.forEach(elementos => {
									$('#ciudades').append(`<option value=${elementos.id_ciudad}> ${elementos.ciudad} </option>`);

								//localidades
											});	
										});
									});
		$('#ciudades').change(function(){
											$.get('localidades/'+$('#ciudades').val(),function(respuestacuatro){
											console.log(respuestacuatro);	
											$('#localidades').empty();

											$('#localidades').append(`<option value="0" disable> Selecciona Localidad</option>`)
												respuestacuatro.forEach(elementosc => {
											//	$('#localidades').append(`<option value=${elementosc.id_localidad}> ${elementosc.localidad} </option>`);
												$('#localidades').append(`<option value=${elementosc.id_localidad}> ${elementosc.localidad} </option>`);
													});	
												});
											});






$(document).on("change",".pais",function(){

var estado=$(this).parents(".referencia").find(".edo");



$.get('estados/'+$('.pais').val(),function(respuestacinco){

	//console.log(respuesta);
	
		estado.empty();
		estado.append(`<option value="0" disable> Selecciona Estado</option>`);

		respuestacinco.forEach(ele => {
			estado.append(`<option value=${ele.idcat_estado}> ${ele.estado} </option>`);

   				  });
			});

});

$(document).on("change",".edo",function(){
var muni=$(this).parents(".referencia").find(".muni");
var estado=$(this).parents(".referencia").find(".edo");


	$.get('municipios/'+estado.val(),function(respuestaseis){
		//console.log(respuestados);
	
		muni.empty();
		muni.append(`<option value="0" disable> Selecciona Municipio</option>`);

		respuestaseis.forEach(elem => {
			muni.append(`<option value=${elem.id_municipio}> ${elem.municipio} </option>`);
								});	
							});

});


$(document).on("change",".muni",function(){

	var muni=$(this).parents(".referencia").find(".muni");
	var ciuda=$(this).parents(".referencia").find(".ciuda");


	$.get('ciudades/'+muni.val(),function(respuestasiete){
							//console.log(respuestatres);	
								ciuda.empty();

								ciuda.append(`<option value="0" disable> Selecciona Ciudad</option>`);

									respuestasiete.forEach(eleme => {
									ciuda.append(`<option value=${eleme.id_ciudad}> ${eleme.ciudad} </option>`);
			
											});	
										});

	});


$(document).on("change",".ciuda",function(){

		var ciuda=$(this).parents(".referencia").find(".ciuda");
		var local=$(this).parents(".referencia").find(".local");

$.get('localidades/'+ciuda.val(),function(respuestaocho){
											console.log(respuestaocho);	
											local.empty();

											local.append(`<option value="0" disable> Selecciona Localidad</option>`);

												respuestaocho.forEach(el => {
											local.append(`<option value=${el.id_localidad}> ${el.localidad} </option>`);
														});	
													});
												});

/*

$('#pais').change(function(){
	$.get('estados/'+$('#pais').val(),function(respuestacinco){

	//console.log(respuesta);
	
		$('#edo').empty();
		$('#edo').append(`<option value="0" disable> Selecciona Estado</option>`);

		respuestacinco.forEach(ele => {
			$('#edo').append(`<option value=${ele.idcat_estado}> ${ele.estado} </option>`);

   				  });
			});

		});


		$('#edo').change(function(){
		$.get('municipios/'+$('#edo').val(),function(respuestaseis){
		//console.log(respuestados);
	
		$('#muni').empty();
		$('#muni').append(`<option value="0" disable> Selecciona Municipio</option>`);

		respuestaseis.forEach(elem => {
			$('#muni').append(`<option value=${elem.id_municipio}> ${elem.municipio} </option>`);
								});	
							});
						});
	$('#muni').change(function(){
							$.get('ciudades/'+$('#muni').val(),function(respuestasiete){
							//console.log(respuestatres);	
								$('#ciuda').empty();

								$('#ciuda').append(`<option value="0" disable> Selecciona Ciudad</option>`);

									respuestasiete.forEach(eleme => {
									$('#ciuda').append(`<option value=${eleme.id_ciudad}> ${eleme.ciudad} </option>`);
			
											});	
										});
									});




//localidades
							$('#ciuda').change(function(){
											$.get('localidades/'+$('#ciuda').val(),function(respuestaocho){
											console.log(respuestaocho);	
											$('#local').empty();

											$('#local').append(`<option value="0" disable> Selecciona Localidad</option>`);

												respuestaocho.forEach(el => {
											$('#local').append(`<option value=${el.id_localidad}> ${el.localidad} </option>`);
														});	
													});
												});

*/







});