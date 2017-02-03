<?php



/**
 * Description of clspDLReservacion
 *
 * @author Alejandro hdez g
 */
//include_once '../Model/capafisica/clspFLReservacion.php';
require_once (dirname(dirname(__FILE__)) . '../capafisica/clspFLReservacion.php');


class clspDLReservacion {
  
    public function __construct() {
        
    }

    public function __destruct() {
        
    }
    
    public static function ObtenerFolioReservacion($vmySql,$vflreservacion){
             $consulta = $vmySql->consulta("SELECT id_reservacion FROM p_reservacion ORDER BY id_reservacion DESC LIMIT 1");

        if ($vmySql->num_rows($consulta) > 0) {
            while ($resultados = $vmySql->fetch_array($consulta)) {
                $ultimoFolio=$resultados['idservacion'];
              
                list($numerico,$anio)=  explode("-",$ultimoFolio);
                
                $valor=$numerico+1;
                
                $nuevofolio=  str_pad($valor,7,"0",STR_PAD_LEFT);
                $anioactual=  date("Y");
                
                
                list($siglo,$numero)=  explode("0",$anioactual);
                
                $vflreservacion->idreservacion=$nuevofolio."-".$numero;

           
            }
            return 1;
        }

        return 0;
        
        
    }
        
        
    
    
    public static function insertarReservacion($vmySql, $vflreservacion){
                try {
//It sets sql statement in order to add new reservacion
            $vsql = "INSERT INTO p_reservacion(id_reservacion,cmpfechaEntrada,cmpfechaSalida,cmpcantidadPersonas,id_usuario,id_estadoReservacion) ";
            $vsql.="VALUES('" . $vflreservacion->idreservacion . "'";
            $vsql.=", '" . $vflreservacion->fechaEntrada . "'";
            $vsql.=", '" . $vflreservacion->fechaSalida . "'";
            $vsql.=", '" . $vflreservacion->cantidadPersonas . "'";
            $vsql.=", '" . $vflreservacion->idusuario . "'";
            $vsql.=", '" . $vflreservacion->idestadoReservacion . "')";





            if ($vmySql->consulta($vsql)) {

              

                if ($vmySql->ObtenerNumeroFilasAfectadas() != 1) {
                    // throw new Exception("Ocurrió un error al registrar los datos del usuario, intente de nuevo", 0);
                    return 0;
                }
            } 

         
            unset($vsql, $vmySql);

            return 1;
        } catch (Exception $vexcepcion) { //It catches exception /It returns exception code catched
                    throw new Exception($vexcepcion->getMessage(),$vexcepcion->getCode());
        }
        
        
        
    }
    
    public static function ActualizarNumeroActividades($vmySql,$vflreservacion){
        
          try {
           // $vsql = "UPDATE c_cabania SET cmpnombre=\"$vflcabania->nombre\",cmpdescripcion=\"$vflcabania->descripcion\",cmptarifa=\"$vflcabania->tarifa\"  WHERE id_cabania=\"$vflcabania->idcabania\" ";
            $consulta = $vmySql->consulta("UPDATE p_reservacion SET cmpnumeroDeActividades=\"$vflreservacion->numeroDeActividades\"  WHERE id_reservacion=\"$vflreservacion->idreservacion\" ");

            if ($consulta) {

                if ($vmySql->ObtenerNumeroFilasAfectadas() != 1) {
                    return 0;
                }
               
            }

            unset($consulta, $vmySql);
            return 1; 
        } catch (Exception $vexcepcion) {

            throw new Exception($vexcepcion->getMessage(), $vexcepcion->getCode());
        }
        
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
            
       public static function ObtenerReservacionporIdUsuario($vmySql,$idusuario, $coleccion){
         $clave = 'a12b34dsakcsuklmdsa';
          $consulta = $vmySql->consulta("SELECT * FROM p_reservacion WHERE id_usuario =\"$idusuario\" ");

        if ($vmySql->num_rows($consulta) > 0) {
            while ($resultados = $vmySql->fetch_array($consulta)) {
                $reservacion = new clspFLReservacion();
                $reservacion->idreservacion=$resultados['id_reservacion'];
                $reservacion->fechaEntrada=$resultados['cmpfechaEntrada'];
                $reservacion->fechaSalida=$resultados['cmpfechaSalida'];
                $reservacion->cantidadPersonas=$resultados['cmpcantidadPersonas'];
                $reservacion->idestadoReservacion=$resultados['id_estadoReservacion'];
                $reservacion->idusuario=$resultados['id_usuario'];
                $reservacion->idreservacionprotegido=  md5($clave.$resultados['id_reservacion']);

             
                


                $coleccion->reservaciones[] = $reservacion;
                // echo json_encode($coleccion);
            }
            return 1;
        }

        return 0;
        
        
    }         
    
     public static function ObtenerReservacionporFolio($vmySql,$idprotegido, $vcoleccion){
         $clave = 'a12b34dsakcsuklmdsa';
      //    $consulta = $vmySql->consulta("SELECT * FROM p_reservacion WHERE MD5(concat(‘”.$clave.”‘,id_reservacion)) =\"$idprotegido\" ");
$consulta = $vmySql->consulta("SELECT * FROM p_reservacion WHERE id_reservacion =\"$idprotegido\" ");
        if ($vmySql->num_rows($consulta) > 0) {
            while ($resultados = $vmySql->fetch_array($consulta)) {
                $reservacion = new clspFLReservacion();
                $reservacion->idreservacion=$resultados['id_reservacion'];
                $reservacion->fechaEntrada=$resultados['cmpfechaEntrada'];
                $reservacion->fechaSalida=$resultados['cmpfechaSalida'];
                $reservacion->numeroDeActividades=$resultados['cmpnumeroDeActividades'];
                $reservacion->cantidadPersonas=$resultados['cmpcantidadPersonas'];
                $reservacion->idestadoReservacion=$resultados['id_estadoReservacion'];
                $reservacion->idusuario=$resultados['id_usuario'];
                      
                


                $vcoleccion->reservaciones[] = $reservacion;
                // echo json_encode($coleccion);
            }
            return 1;
        }

        return 0;
        
        
    }         
    
    public static function ObtenerDetalleReservacionPorFolio($vmySql,$idreservacion,$coleccion){
        $consulta = $vmySql->consulta("SELECT * FROM p_reservacion WHERE id_reservacion =\"$idprotegido\" ");
        if ($vmySql->num_rows($consulta) > 0) {
            while ($resultados = $vmySql->fetch_array($consulta)) {
                $reservacion = new clspFLReservacion();
                $reservacion->idreservacion=$resultados['id_reservacion'];
                $reservacion->fechaEntrada=$resultados['cmpfechaEntrada'];
                $reservacion->fechaSalida=$resultados['cmpfechaSalida'];
                $reservacion->numeroDeActividades=$resultados['cmpnumeroDeActividades'];
                $reservacion->cantidadPersonas=$resultados['cmpcantidadPersonas'];
                $reservacion->idestadoReservacion=$resultados['id_estadoReservacion'];
                $reservacion->idusuario=$resultados['id_usuario'];
                      
                


                $vcoleccion->reservaciones[] = $reservacion;
                // echo json_encode($coleccion);
            }
            return 1;
        }

        return 0;
        
        
        
        
    }
    
}
