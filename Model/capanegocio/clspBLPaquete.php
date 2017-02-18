<?php



/**
 * Description of clspBLPaquete
 *
 * @author Alejandro hdez g
 */
//include_once '../Model/capadatos/clspDLPaquete.php';
//include_once '../Model/capadatos/clspDLAsignarPaqueteActividad.php';
//
//include_once '../Model/conexcion.php';

require_once (dirname(dirname(__FILE__)) . '/capadatos/clspDLPaquete.php');
require_once (dirname(dirname(__FILE__)) . '/capadatos/clspDLReservacion.php');
require_once (dirname(dirname(__FILE__)) . '/capadatos/clspDLAsignarPaqueteActividad.php');
require_once (dirname(dirname(__FILE__)) . '/conexcion.php');



class clspBLPaquete {
    //put your code here
    
     function __construct() {
        # code...
    }

    function __destruct() {
        
    }
    
    
   

    public static function listar_paquete($coleccion) {


        $mysql = new Mysql();
        $mysql->AbrirConexion();

        $result = clspDLPaquete::listarPaquetes($mysql, $coleccion);
        
        return $result;
      
        $mysql->CerrarConexion();
    }
    
    
    public static function  listaractividadesdepaquete($id,$coleccion) {


        $mysql = new Mysql();
        $mysql->AbrirConexion();

        $result = clspDLPaquete::listaractividadesdepaquete($mysql, $id, $coleccion);
        
        return $result;
      
        $mysql->CerrarConexion();
    }
    
    
        public static function eliminar_paquete($id){
          $vmySql = new Mysql();
        $vmySql->AbrirConexion();
        $vmySql->start_transaction();
    if($existe=clspDLReservacion::ObtenerPaqueteExistente($vmySql, $id)==2){
        
        return 2;
    }else{
        
   if($eliminarPaquete = clspDLAsignarPaqueteActividad::eliminarPaqueteActividad($vmySql, $id) ==1 ){

        
        $result=  clspDLPaquete::eliminar_paquete($vmySql, $id);
   
          if ($result == 1) {

                $vmySql->commit();
               // echo 'se hizo commit';
            } else {

                $vmySql->rollback();

               // echo 'se hizo roollback';
                return -1;
            }
        } 
    }
         return $result;
        $vmySql->CerrarConexion();
        
        
    }
    
      public static function insertar_paquete($vflAsignarPaqueteActividad) {

        $vmySql = new Mysql();
        $vmySql->AbrirConexion();
        $vmySql->start_transaction();

        if ($result = clspDLPaquete::insertarPaquete($vmySql, $vflAsignarPaqueteActividad) == 1) {

            $asignarActividad = clspDLAsignarPaqueteActividad::asignarPaqueteActividad($vmySql, $vflAsignarPaqueteActividad);

            if ($asignarActividad == 1) {

                $vmySql->commit();
               // echo 'se hizo commit';
            } else {

                $vmySql->rollback();

               // echo 'se hizo roollback';
                return -1;
            }
        } 
        else {

            return 0;
        }
        $vmySql->CerrarConexion();

        return 1;
    }

     public static function editarPaquete($vflpaquete) {
        $vmySql = new Mysql();
        $vmySql->AbrirConexion();

        $vresultado=  clspDLPaquete::editarPaquete($vmySql,$vflpaquete);
     
          
            return $vresultado;
        
        $vmySql->CerrarConexion();
    }
    
    
    
    
    
}
