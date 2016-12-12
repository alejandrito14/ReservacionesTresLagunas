<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*include '../Slim/Slim.php';*/
include'../slim-3.3.0/autoload.php';
include '../Model/capanegocio/clspBLUsuario.php';
include '../Model/capafisica/clscFLUsuario.php';



$app  = new Slim\App();


$app->get("/usuarios", function () use ($app, $result) {

    /*  $obj = new productocn();
      $result = $obj->listar_producto();

      $app->response()->header("Content-Type:aplication/json");

      $json_string = json_encode($result);
      echo $json_string; */
$dataResponse=array();
try{
    $obj = new clspBLUsuario();
    $coleccion = new clscFLUsuario();
    $result = $obj->listar_usuario($coleccion);

    if ($result == 1) {
        
        $dataResponse[]=$coleccion;

    }
  }catch(Exception $exception){

$dataResponse["turistas"]=-100;

  }
  echo json_encode($dataResponse);


});

$app->get("/login/{email}/{contrasena}/{tipo}", function ($vrequest) {

    $vdataResponse = array();


    try {

        $tipo = trim($vrequest->getAttribute('tipo'));

        $vflusuarioadmin = new clspFLUsuario();
        
        $vflusuarioadmin->correo = trim($vrequest->getAttribute('email'));
        $vstatus = clspBLUsuario::verificaradmin($vflusuarioadmin, trim($vrequest->getAttribute("contrasena")));

       
        
        if ($vstatus == 1) {

            clspBLUsuario::Obtenerdatosadmin($vflusuarioadmin);
                        
            if($vflusuarioadmin->tipoUsuario==$tipo){

                
                
            session_start();
            $_SESSION["idusuario"] = $vflusuarioadmin->idusuario;
           
            $vdataResponse["admin"] = $vflusuarioadmin;
            $vdataResponse["messageNumber"] = $vstatus;

            }
                else {
                  $vdataResponse["messageNumber"] = 2;

                
            }
        }

//             $obj = new clspBLTurista();
//             $coleccion = new clscFLTurista();
//            $vstatus = $obj->iniciar_sesion($coleccion,$usuario, $contrasena);
        //var_dump(json_encode($vflturistas));
        // $vstatus = clspBLTurista::iniciar_sesion($usuario,$contrasena);

        unset($vrequest, $vflturista, $vstatus);
    } catch (Exception $exception) {

        $vdataResponse["messageNumber"] = -100;
    }

    echo json_encode($vdataResponse);
});

    
    
    




$app->run();