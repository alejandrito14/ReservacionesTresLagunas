
<?php

/**
 * 
 */
//include '../Model/capadatos/clspDLTurista.php';
require_once (dirname(dirname(__FILE__)) . '/capadatos/clspDLTurista.php');

require_once (dirname(dirname(__FILE__)) . "/capafisica/clspFLMail.php");
require_once (dirname(dirname(__FILE__)) . "/capadatos/clspDLMail.php");

class clspBLTurista {

    function __construct() {
        # code...
    }

    function __destruct() {
        
    }

    public static function listar_turista($coleccion) {


        $mysql = new Mysql();
        $mysql->AbrirConexion();

        $result = clspDLTurista::listarTuristas($mysql, $coleccion);
        //cambiar nombre a clscDLTurista
        return $result;
        /* $obj = new productoscd();
          $result = $obj->lista_productos();

          return $result; */
        $mysql->CerrarConexion();
    }

    
    public static function obtener_turistaporid($coleccion,$idturista){
         $mysql = new Mysql();
        $mysql->AbrirConexion();

        $result = clspDLTurista::obtener_turistaporid($mysql, $coleccion,$idturista);
        //cambiar nombre a clscDLTurista
        return $result;
        /* $obj = new productoscd();
          $result = $obj->lista_productos();

          return $result; */
        $mysql->CerrarConexion();
    }
    public static function insertar_turista($vflturistas) {

        $vmySql = new Mysql();
        $vmySql->AbrirConexion();
        $vmySql->start_transaction();
        
        if(clspDLUsuario::ExisteUsuario($vmySql,$vflturistas)==2){
            
            return 2;
        } 
        else{

        if ($result = clspDLUsuario::agregarUsuarios($vmySql, $vflturistas) == 1) {

            $turistas = clspDLTurista::agregarTurista($vmySql, $vflturistas);

            if ($turistas == 1) {

                clspBLTurista::enviarcorreo($vflturistas);
                
                
                
                $vmySql->commit();
                //echo 'se hizo commit';
            } else {

                $vmySql->rollback();

               // echo 'se hizo roollback';
                return -1;
            }
        } 
        else {

            return 0;
        }
             
          
    }
        $vmySql->CerrarConexion();

        return 1;
    }

    
    public static function enviarcorreo($vflturistas){
        try{
            
            
                    $vflMail= new clspFLMail();
                    $vflMail->sendingUserName="Centro Ecoturístico Tres Lagunas S.A de C.V.";
                    $vflMail->subject="Solicitud de Activación de cuenta";
	            $vflMail->receiverAddress=$vflturistas->correo;
                    $vflMail->receiverUserName=$vflturistas->nombre . " " . $vflturistas->apellidoPaterno . " " . $vflturistas->apellidoMaterno;
                    $vflMail->message="<h4>Hola</h4>";
                    $vflMail->message ="<p>Recientemente te has registrado con esta cuenta.</p>";
                    $vflMail->message.="<p>Deberá de ingresar al siguiente link para realizar dicho proceso, el cual tiene una vigencia de 24 hrs.:";
                    $vflMail->message.=" </br> <strong>Activar cuenta</strong>";
                    $vflMail->message.=" <a href='http://treslagunas.com.mx/' class='btn-large waves-effect waves-light'>Explore nuestros servicios</a>";
                    $vflMail->message.="</p>";
				    if ( clspDLMail::sendEmail($vflMail)!=1 ){
					  
					   return -2;
				    }
                    
                    
			return 1;
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
        
        
    }
    
    
    public  static function verificarturista($vflturista,$vpass){
        
        try{
             $vmySql = new Mysql();
             $vmySql->AbrirConexion();
             $vstatus=  clspDLTurista::verificarturista($vflturista, $vpass, $vmySql);
             
              $vmySql->CerrarConexion();  
              
              unset($vmySql);
              return $vstatus;
        }  
        catch (Exception $vexception){
            
         throw new Exception($vexception->getMessage(), $vexception->getCode());

        }
        
        
    }
    
    
    public static function Obtenerdatosturista($vflturista){
         try{
             $vmySql = new Mysql();
             $vmySql->AbrirConexion();
             $vstatus=  clspDLTurista::Obtenerdatosturista($vflturista, $vmySql);
             
              $vmySql->CerrarConexion();  
              
              unset($vmySql);
              return $vstatus;
           }  
        catch (Exception $vexception){
            
         throw new Exception($vexception->getMessage(), $vexception->getCode());

        }
        
    }

    public static function iniciar_sesion($coleccion,$usuario,$contrasena) {
        $vmySql = new Mysql();
        $vmySql->AbrirConexion();
        
        $resul = clspDLTurista::inicio_sesion($vmySql,$coleccion,$usuario,$contrasena);
          
        
        if ($resul==1) {
            
         //echo ' ha iniciado sesion';
         return 1;
        } else{
             //echo 'no ha iniciado sesion';
             return 0;
        }
      
        
         $vmySql->CerrarConexion();
    }
    
      public static function eliminar_turista($id) {
        $vmysql = new Mysql();
        $vmysql->AbrirConexion();

        $result = clspDLTurista::eliminarturista($vmysql, $id);


        return $result;

        $mysql->CerrarConexion();
    }
    
    
    
    

}

?>