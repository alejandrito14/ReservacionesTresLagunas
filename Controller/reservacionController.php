<?php

require_once ('../slim-3.3.0/autoload.php');
require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clscFLReservacion.php');
require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clspFLAsignacionReservacionActividad.php');
require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clspFLAsignacionReservacionPaquete.php');
require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clspFLasignacionCabania.php');
////
////
//require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clspFLReservacion.php');

require_once (dirname(dirname(__FILE__)) . '/Model/capanegocio/clspBLReservacion.php');

$app = new Slim\App();


$app->post("/reservacion", function ($vrequest) {

    $vdataResponse = array();

    try {

        $vbody = $vrequest->getBody();
        $ventrada = json_decode($vbody);
        $vflreservacion = new clspFLReservacion();

        //   var_dump(json_encode($ventrada));

        $vflasignarcabania = new clspFLasignacionCabania();

        $vflasignaractividad = new clspFLAsignacionReservacionActividad();
        $vflasignarpaquete = new clspFLAsignacionReservacionPaquete();
        $vflreservacion->idreservacion = 0;
        $vflreservacion->fechaEntrada = $ventrada->txtfechaentrada;
        $vflreservacion->fechaSalida = $ventrada->txtfechasalida;
        $vflreservacion->numeroDeActividades = 0;
        $vflreservacion->cantidadPersonas = $ventrada->txtcantidadpersonas;
        $vflreservacion->comprobantePago = 0;
        $vflreservacion->idusuario = $ventrada->txtturista;
        $vflreservacion->idestadoReservacion = 1;
//      
        $vflasignarcabania->idcabania = $ventrada->cabanias;
        $vflasignarpaquete->idpaquete = $ventrada->paquetes;
        $vflasignaractividad->idactividad = $ventrada->actividades;
//

        $vstatus = clspBLReservacion::insertarReservacion($vflreservacion, $vflasignarcabania, $vflasignaractividad, $vflasignarpaquete);

        if ($vstatus = 1) {

            $vdataResponse["messageNumber"] = $vstatus;
       unset($vrequest,$vflasignaractividad,$vflasignarpaquete,$vflasignarcabania,$vflreservacion);
            }

        } catch (Exception $exception) {

        $vdataResponse["messageNumber"] = -100;
    }

    echo json_encode($vdataResponse);
});


$app->get("/reservaciones", function () use ($app, $result) {


    $dataResponse = array();
    try {
        $obj = new clspBLReservacion();
        $coleccion = new clscFLReservacion();
        $result = $obj->ObtenerTodasReservaciones($coleccion);
        if ($result == 1) {

            $dataResponse['reservaciones'] = $coleccion;
        }
    } catch (Exception $exception) {

        $dataResponse["reservaciones"] = -100;
    }

    echo json_encode($dataResponse);
});

$app->get("/reservaciones/{idusuario}", function ($vresponse) {

   $idusuario=$vresponse->getAttribute('idusuario');
    $dataResponse = array();
    try {
        $obj = new clspBLReservacion();
        $coleccion = new clscFLReservacion();
        $result = $obj->ObtenerReservacionporIdUsuario($idusuario,$coleccion);
        if ($result == 1) {

            $dataResponse['reservaciones'] = $coleccion;
        }
    } catch (Exception $exception) {

        $dataResponse["reservaciones"] = -100;
    }

    echo json_encode($dataResponse);
});














$app->run();
