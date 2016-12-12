<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once ('../slim-3.3.0/autoload.php');
require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clscFLActividad.php');

//require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clspFLTurista.php');

require_once (dirname(dirname(__FILE__)) . '/Model/capanegocio/clspBLActividad.php');



//header("Content-Type: text/html;charset=utf-8");
$app = new Slim\App();


$app->get("/actividades", function () use ($app, $result) {


    $dataResponse = array();
    try {
        $obj = new clspBLActividad();
        $coleccion = new clscFLActividad();
        $result = $obj->listar_Actividades($coleccion);
        if ($result == 1) {

            $dataResponse['actividades'] = $coleccion;
        }
    } catch (Exception $exception) {

        $dataResponse["actividad"] = -100;
    }

    echo json_encode($dataResponse);
});


$app->post("/actividades", function ($vrequest) {

    $vdataResponse = array();

    try {

        $vbody = $vrequest->getBody();
        $ventrada = json_decode($vbody);


        // var_dump(json_encode($ventrada));

        $vflactividad = new clspFLActividad();

        $vflactividad->nombreActividad = $ventrada->txtnombre;
        $vflactividad->tarifa = $ventrada->txttarifa;
        $vflactividad->detalle = $ventrada->txtdetalle;


        $vstatus = clspBLActividad::insertar_actividad($vflactividad);

        if ($vstatus = 1) {

            $vdataResponse["messageNumber"] = $vstatus;
        }
    } catch (Exception $exception) {

        $vdataResponse["messageNumber"] = -100;
    }

    echo json_encode($vdataResponse);
});


$app->delete("/actividades/{idactividad}", function ($vresponse) {

    $id = $vresponse->getAttribute('idactividad');


    $vdataResponse = array();
    try {
        $obj = new clspBLActividad;
        $vstatus = $obj->eliminar_actividad($id);
        if ($vstatus = 1) {

            $vdataResponse["messageNumber"] = $vstatus;
        }
    } catch (Exception $exception) {
        $vdataResponse["actividad"] = -100;
    }

    echo json_encode($vdataResponse);
});



$app->put('/actividades/{idactividad}', function ($vrequest) {

    $vdataResponse = array();

    try {

        $vbody = $vrequest->getBody();
        $ventrada = json_decode($vbody);


        //var_dump($ventrada);
        $vflactividad = new clspFLActividad();

        $vflactividad->idActividad = $ventrada->actividad;
        $vflactividad->nombreActividad = $ventrada->nombre;
        $vflactividad->tarifa = $ventrada->tarifa;
        $vflactividad->detalle = $ventrada->detalle;

//        var_dump($vflactividad);
        $vstatus = clspBLActividad::editar_actividad($vflactividad);

        if ($vstatus = 1) {

            $vdataResponse["messageNumber"] = $vstatus;
            
            
        }
    } catch (Exception $exception) {

        $vdataResponse["messageNumber"] = -100;
    }

    echo json_encode($vdataResponse);
});









$app->run();
