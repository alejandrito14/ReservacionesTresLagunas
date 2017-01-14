<?php



/**
 * Description of clspBLReservacion
 *
 * @author Alejandro hdez g
 */
include_once '../Model/capadatos/clspDLReservacion.php';
include_once '../Model/conexcion.php';
class clspBLReservacion {
   
    
     function __construct() {
        # code...
    }

    function __destruct() {
        
    }
    
        public static function insertarReservacion($vflreservacion) {

        $vmySql = new Mysql();
        $vmySql->AbrirConexion();

        if ($result = clspDLCabania::insertarCabania($vmySql, $vflreservacion) == 1) {
          
            return 1;
        } else {
            return 0;
        }
        $vmySql->CerrarConexion();
    }
    
    
    public static function ObtenerTodasReservaciones($coleccion){
         $vmySql = new Mysql();
        $vmySql->AbrirConexion();

        $result = clspDLReservacion::ObtenerTodasReservaciones($vmySql , $coleccion);
        
        return $result;
      
        $vmySql->CerrarConexion();
        
        
    }
}
