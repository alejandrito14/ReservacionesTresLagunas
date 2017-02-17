<?php



/**
 * Description of clspBLUsuario
 *
 * @author Alejandro hdez g
 */

//include '../Model/conexcion.php';
require_once (dirname(dirname(__FILE__)) . '/conexcion.php');

//include '../Model/capadatos/clspDLUsuario.php';
require_once (dirname(dirname(__FILE__)) . '/capadatos/clspDLUsuario.php');

class clspBLUsuario {
    //put your code here
    public function __construct() {
        
    }

    public function __destruct() {
        
    }

     public  function  listar_usuario($coleccion) {
        
        
      $mysql = new Mysql();
      
      
      $result=  clspDLUsuario::lista_usuarios($mysql, $coleccion);
      
     
     // $result= clspDLUsuario::lista_usuarios($mysql,$coleccion);

      return $result;
       /* $obj = new productoscd();
        $result = $obj->lista_productos();

        return $result;*/
    }
    
    
    public static function agregar_usuario ($vflturistas){
       
      $result= clspDLUsuario::agregarUsuarios($vflturistas);
       
            
        
    }
    
    
       public  static function verificaradmin($vflusuarioadmin,$vpass){
        
        try{
             $vmySql = new Mysql();
             $vmySql->AbrirConexion();
             $vstatus=  clspDLUsuario::verificaradmin($vflusuarioadmin, $vpass, $vmySql);
             
              $vmySql->CerrarConexion();  
              
              unset($vmySql);
              return $vstatus;
        }  
        catch (Exception $vexception){
            
         throw new Exception($vexception->getMessage(), $vexception->getCode());

        }
        
        
    }
    
    
   public static  function Obtenerdatosadmin($vflusuarioadmin)
   {
       
       try{
             $vmySql = new Mysql();
             $vmySql->AbrirConexion();
             $vstatus=  clspDLUsuario::Obtenerdatosadmin($vflusuarioadmin, $vmySql);
             
              $vmySql->CerrarConexion();  
              
              unset($vmySql);
              return $vstatus;
           }  
        catch (Exception $vexception){
            
         throw new Exception($vexception->getMessage(), $vexception->getCode());

        }
        
       
       
   }
    
    
    
}
