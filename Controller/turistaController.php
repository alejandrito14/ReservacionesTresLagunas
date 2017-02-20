<?php

/* include '../Slim/Slim.php'; */

require_once ('../slim-3.3.0/autoload.php');
require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clscFLTurista.php');

//require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clspFLTurista.php');

require_once (dirname(dirname(__FILE__)) . '/Model/capanegocio/clspBLTurista.php');

require_once (dirname(dirname(__FILE__)) . '/Model/capanegocio/clspBLUsuario.php');

//require_once (dirname(dirname(__FILE__)) . "/Model/capafisica/clscFLTurista.php");







$app = new Slim\App();


$app->get("/turistas", function () use ($app, $result) {

    /*  $obj = new productocn();
      $result = $obj->listar_producto();

      $app->response()->header("Content-Type:aplication/json");

      $json_string = json_encode($result);
      echo $json_string; */
    $dataResponse = array();
    try {
        $obj = new clspBLTurista();
        $coleccion = new clscFLTurista();
        $result = $obj->listar_turista($coleccion);

        if ($result == 1) {

            $dataResponse["turistas"] = $coleccion;
        }
    } catch (Exception $exception) {

        $dataResponse["turistas"] = -100;
    }
    echo json_encode($dataResponse);
});

$app->get("/ejemplo", function () use ($app, $result) {

    echo "hola";
});



$app->post("/turistas", function ($vrequest) {

    $vdataResponse = array();

    try {


        $vbody = $vrequest->getBody();
        $ventrada = json_decode($vbody);
        $vflturistas = new clspFLTurista();
        $vflturistas->correo = $ventrada->txtemail;
        $vflturistas->contrasena = $ventrada->txtcontrasena;
        $vflturistas->nombre = $ventrada->txtfirstName;
        $vflturistas->apellidoPaterno = $ventrada->txtapPaterno;
        $vflturistas->apellidoMaterno = $ventrada->txtapMaterno;
        $vflturistas->numeroTelefono = $ventrada->txttelefono;
        $vflturistas->lugarOrigen = $ventrada->txtLo;
        $vflturistas->fechaNacimiento = $ventrada->txtFecha_na;
        $vflturistas->tipoUsuario = 2;

        $vstatus = clspBLTurista::insertar_turista($vflturistas);


        if ($vstatus >0) {

            $vdataResponse["messageNumber"] = $vstatus;
        }
    } catch (Exception $exception) {

        $vdataResponse["messageNumber"] = -100;
    }

    echo json_encode($vdataResponse);
});


//$app->get("/login", function ($vrequest) {
//
//    $vdataResponse = array();
//    try {
//        $vbody = $vrequest->getBody();
//        $ventrada = json_decode($vbody);
//
//
//        $vflturistas = new clspFLTurista();
//        $vflturistas->correo = $ventrada->txtemail;
//        $vflturistas->contrasena = $ventrada->txtcontrasena;
//         var_dump(json_encode($vflturistas));
////        $vstatus = clspBLTurista::iniciar_sesion($vflturistas);
////
////        if ($vstatus == 1) {
////                $vdataResponse["messageNumber"] =$vstatus;
////        } 
//    } catch (Exception $exception) {
//
//        $vdataResponse["messageNumber"] = -100;
//    }
//     
//  //echo json_encode($vdataResponse);
//});

$app->get("/turistas/{idturista}",  function ($vrequest){
    
   
    $dataResponse = array();
    try {
      
     $idturista = trim($vrequest->getAttribute('idturista'));

        $obj = new clspBLTurista();
        $coleccion = new clscFLTurista();
        $result = $obj->obtener_turistaporid($coleccion, $idturista);

        if ($result == 1) {

            $dataResponse["turistas"] = $coleccion;
        }
    } catch (Exception $exception) {

        $dataResponse["turistas"] = -100;
    }
    echo json_encode($dataResponse);
    
});

$app->get("/login/{email}/{contrasena}", function ($vrequest) {

    $vdataResponse = array();


    // var_dump($usuario);
    try {


        $vflturista = new clspFLTurista();

        $vflturista->correo = trim($vrequest->getAttribute('email'));
        $vstatus = clspBLTurista::verificarturista($vflturista, trim($vrequest->getAttribute("contrasena")));
            
        if ($vstatus == 1) {

            clspBLTurista::Obtenerdatosturista($vflturista);

            session_start();
            $_SESSION["idusuario"] = $vflturista->idusuario;
           
            $vdataResponse["turista"] = $vflturista;
        }

//             $obj = new clspBLTurista();
//             $coleccion = new clscFLTurista();
//            $vstatus = $obj->iniciar_sesion($coleccion,$usuario, $contrasena);
        //var_dump(json_encode($vflturistas));
        // $vstatus = clspBLTurista::iniciar_sesion($usuario,$contrasena);
        $vdataResponse["messageNumber"] = $vstatus;

        unset($vrequest, $vflturista, $vstatus);
    } catch (Exception $exception) {

        $vdataResponse["messageNumber"] = -100;
    }

    echo json_encode($vdataResponse);
});




$app->delete("/turistas/{idturista}", function ($vresponse) {

    $id = $vresponse->getAttribute('idturista');


    $vdataResponse = array();
    try {
        $obj = new clspBLTurista();
        $vstatus = $obj->eliminar_turista($id);
        
        
        if ($vstatus = 1) {

              $vdataResponse["messageNumber"] =$vstatus;
        }
    } catch (Exception $exception) {
        $vdataResponse["cabania"] = -100;
    }

    echo json_encode($vdataResponse);
});


$app->run();


/*  $obj = new productocn();
  $result = $obj->listar_producto();

  $app->response()->header("Content-Type:aplication/json");

  $json_string = json_encode($result);
  echo $json_string; */
?>