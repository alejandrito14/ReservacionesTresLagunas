<?php



/**
 * Description of clspDLReservacion
 *
 * @author Alejandro hdez g
 */
include_once '../Model/capafisica/clspFLReservacion.php';


class clspDLReservacion {
  
    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    public static function insertarReservacion(){
        
        
        
    }
    
    public static function ObtenerTodasReservaciones($vmySql , $coleccion){
        
          $consulta = $vmySql->consulta("SELECT * FROM p_reservacion");

        if ($vmySql->num_rows($consulta) > 0) {
            while ($resultados = $vmySql->fetch_array($consulta)) {
                $reservacion = new clspFLReservacion();
                $reservacion->idreservacion=$resultados['id_reservacion'];
                $reservacion->fechaEntrada=$resultados['cmpfechaEntrada'];
                $reservacion->fechaSalida=$resultados['cmpfechaSalida'];
                $reservacion->cantidadPersonas=$resultados['cmpcantidadPersonas'];
                $reservacion->idestadoReservacion=$resultados['id_estadoReservacion'];
                $reservacion->idusuario=$resultados['id_usuario'];
                

             
                


                $coleccion->reservaciones[] = $reservacion;
                // echo json_encode($coleccion);
            }
            return 1;
        }

        return 0;
        
        
    }
    
}
