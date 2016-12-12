/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 

$(document).ready(function(){

    

   
   validar();
$('input,select').change(function(){

($(this).val())? $(this).css('background-color','transparent') &&  $(this).css('border','transparent')  && $('label[for="'+$(this).attr('id')+'"]').text("")  :   $('label[for="'+$(this).attr('id')+'"]').text("Este campo esta vacio") &&  $(this).css('border','red 2px solid'); 



});



});


function validar(){

$('input, select').each(function(){
        if(!$(this).val()){

            $(this).css('background-color','transparent');
        }else{



        }

        
    });


}




function enviar(){
    var datosform=$("#formulario").serialize();
    var formData= new FormData($("#formulario")[0]);


        

    $.ajax({
        url:'',
        type:'POST',
        data:formData+datosform,
        processData:false,
        contentType:false
    }).done(function(resp){
        
        if(resp=='0'){
                    $('#error').show();
                

                }else{
                    
                
                  
                }
        
    });
    
}