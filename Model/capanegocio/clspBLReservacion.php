<?php

/**
 * Description of clspBLReservacion
 *
 * @author Alejandro hdez g
 */
//include_once '../Model/capadatos/clspDLReservacion.php';
//include_once '../Model/capadatos/clspDLCabania.php';
//include_once '../Model/capadatos/clspDLPaquete.php';
//include_once '../Model/capadatos/clspDLActividad.php';
//include_once '../Model/conexcion.php';
require_once (dirname(dirname(__FILE__)) . '../capadatos/clspDLPaquete.php');

require_once (dirname(dirname(__FILE__)) . '../capadatos/clspDLActividad.php');

require_once (dirname(dirname(__FILE__)) . '../capadatos/clspDLCabania.php');

require_once (dirname(dirname(__FILE__)) . '../capadatos/clspDLReservacion.php');
require_once (dirname(dirname(__FILE__)) . '../conexcion.php');


class clspBLReservacion {

    function __construct() {
        # code...
    }

    function __destruct() {
        
    }

    public static function insertarReservacion($vflreservacion, $vflasignarcabania, $vflasignaractividad, $vflasignarpaquete) {
        //   var_dump($vflreservacion,$vflasignarcabania,$vflasignarpaquete,$vflasignaractividad);

        $vmySql = new Mysql();
        $vmySql->AbrirConexion();
        $vmySql->start_transaction();

        clspDLReservacion::ObtenerFolioReservacion($vmySql, $vflreservacion);

         if ($result = clspDLReservacion::insertarReservacion($vmySql, $vflreservacion) == 1) {
           
             $asignarcabania = clspDLCabania::AsignarCabaniaReservacion($vmySql, $vflreservacion, $vflasignarcabania);
            if ($asignarcabania == 1) {

                $asignarpaquete = clspDLPaquete::AsignarPaqueteReservacion($vmySql, $vflreservacion, $vflasignarpaquete);

                if ($asignarpaquete == 1) {

                    $asignaractividades = clspDLActividad::AsignarActividadReservacion($vmySql, $vflreservacion, $vflasignaractividad);

                    if ($asignaractividades) {

                        $actualizarNumactividades = clspDLReservacion::ActualizarNumeroActividades($vmySql, $vflreservacion);

                        if ($actualizarNumactividades == 1) {
                            $vmySql->commit();
                        } else {
                            $vmySql->rollback();
                        }
                    } else {
                        $vmySql->rollback();
                    }
                } else {
                    $vmySql->rollback();
                }
            } else {
                $vmySql->rollback();
            }
        } else {

            return 0;
        }
        $vmySql->CerrarConexion();

        return 1;
    }

    public static function ObtenerTodasReservaciones($coleccion) {
        $vmySql = new Mysql();
        $vmySql->AbrirConexion();

        $result = clspDLReservacion::ObtenerTodasReservaciones($vmySql, $coleccion);

        return $result;

        $vmySql->CerrarConexion();
    }
public static function ObtenerReservacionporFolio($idprotegido,$vcoleccion) {
       
        $vmySql = new Mysql();
        $vmySql->AbrirConexion();

        $result = clspDLReservacion::ObtenerReservacionporFolio($vmySql,$idprotegido, $vcoleccion);

        return $result;

        $vmySql->CerrarConexion();
    }
    
        public static function ObtenerReservacionporIdUsuario($idusuario,$coleccion) {
        $vmySql = new Mysql();
        $vmySql->AbrirConexion();

        $result = clspDLReservacion::ObtenerReservacionporIdUsuario($vmySql,$idusuario, $coleccion);

        return $result;

        $vmySql->CerrarConexion();
    }       
    public static function ObtenerDetalleReservacionPorFolio($idreservacion,$coleccion){
        
         $vmySql = new Mysql();
        $vmySql->AbrirConexion();

        $result = clspDLReservacion::ObtenerDetalleReservacionPorFolio($vmySql,$idreservacion,$coleccion);

        return $result;

        $vmySql->CerrarConexion();
        
    }
            
}
