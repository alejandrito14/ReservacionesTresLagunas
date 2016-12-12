<?php



require_once ('../slim-3.3.0/autoload.php');

//require_once (dirname(dirname(__FILE__)) . '/Model/capafisica/clspFLTurista.php');

require_once (dirname(dirname(__FILE__)) . '/Model/capanegocio/clspBLPaquete.php');

$app = new Slim\App();

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

  


      

        if ($vstatus == 1) {
            $vdataResponse["messageNumber"] = $vstatus;
        }


        unset($vrequest, $vbody, $ventrada, $vflAsignarPaqueteActividad, $vstatus);
    } catch (Exception $exception) {

        $vdataResponse["messageNumber"] = -100;
    }

    echo json_encode($vdataResponse);
});

$app->run();
