<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



require_once ('../slim-3.3.0/autoload.php');
require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clscFLPaquete.php');
require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clscFLActividad.php');


require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clscFLPaquete.php');


//require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clspFLTurista.php');

require_once (dirname(dirname(__FILE__)) . '/Model/capanegocio/clspBLPaquete.php');



//header("Content-Type: text/html;charset=utf-8");
$app  = new Slim\App();


$app->get("/paquetes", function () use ($app, $result) {

   
$dataResponse=array();
try{
    $obj = new clspBLPaquete();
    $coleccion = new clscFLPaquete();
    $result = $obj->listar_paquete($coleccion);
    if ($result == 1) {
        
        $dataResponse['paquetes']=$coleccion;
    }
  }catch(Exception $exception){

$dataResponse["Paquetes"]=-100;

  }

  echo json_encode($dataResponse );


});


$app->delete("/paquetes/{idpaquete}", function ($vresponse) {
    
    $id=$vresponse->getAttribute('idpaquete');
    
  
    $vdataResponse=array();
    try{
        $obj=new clspBLPaquete();
        $vstatus=$obj->eliminar_paquete($id);
        
       if ($vstatus>0) {

              $vdataResponse["messageNumber"] =$vstatus;
        }
                             
        }catch (Exception $exception){
        $vdataResponse["paquete"]=-100;
        
        
    }
    
     echo json_encode($vdataResponse );
});


$app->post("/paqueteActividad", function ($vrequest) {

    $vdataResponse = array();

    try {

        $vbody = $vrequest->getBody();
        $ventrada = json_decode($vbody);

        $vflAsignarPaqueteActividad = new clspFLAsignarPaqueteActividad();
        $vflAsignarPaqueteActividad->nombrePaquete = $ventrada->txtnombre;
        $vflAsignarPaqueteActividad->detallePaquete = $ventrada->txtdetalle;
        $vflAsignarPaqueteActividad->tarifaPaquete = $ventrada->txttarifa;
        $vflAsignarPaqueteActividad->id_actividad = $ventrada->actividad;
  //var_dump($vflAsignarPaqueteActividad);
          $vstatus=  clspBLPaquete::insertar_paquete($vflAsignarPaqueteActividad);

        
      

        if ($vstatus == 1) {
            $vdataResponse["messageNumber"] = $vstatus;
        }


        unset($vrequest, $vbody, $ventrada, $vflAsignarPaqueteActividad, $vstatus);
    } catch (Exception $exception) {

        $vdataResponse["messageNumber"] = -100;
    }

    echo json_encode($vdataResponse);
});




$app->get("/paquetesactividades/{idpaquete}", function ($vresponse) {
    
    $id=$vresponse->getAttribute('idpaquete');
try{
    $obj = new clspBLPaquete();
    $coleccion = new clscFLActividad();
    $result = $obj->listaractividadesdepaquete($id,$coleccion);
    if ($result == 1) {
        
        $dataResponse['actividades']=$coleccion;
    }
  }catch(Exception $exception){

$dataResponse["actividades"]=-100;

  }

  echo json_encode($dataResponse );


});
    
 $app->put('/paquetes/{idpaquete}', function ($vrequest) {
   
     $vdataResponse = array();

    try {

   $vbody =$vrequest->getBody();
   $ventrada=  json_decode($vbody);
   
  
  // var_dump($ventrada);
        $vflpaquete = new clspFLPaquete();
        
        $vflpaquete->idPaquete=$ventrada->paquete;
        $vflpaquete->nombrePaquete=$ventrada->txtnombre;
        $vflpaquete->tarifa=$ventrada->txttarifa;
        $vflpaquete->detalle=$ventrada->txtdetalle;
        $vstatus=  clspBLPaquete::editarPaquete($vflpaquete);
        
        
       
        
        if($vstatus=1){
           
            $vdataResponse["messageNumber"]=$vstatus;
        }
        
        
    } catch (Exception $exception) {

        $vdataResponse["messageNumber"] = -100;
    }

    echo json_encode($vdataResponse);
});   




$app->run();