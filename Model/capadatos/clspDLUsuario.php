<?php



/**
 * Description of clspDLUsuario
 *
 * @author Alejandro hdez g
 */
require_once (dirname(dirname(__FILE__)) . '/capafisica/clspFLUsuario.php');
require_once (dirname(dirname(__FILE__)) . '/conexcion.php');


class clspDLUsuario {

    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    public static function lista_usuarios($mysql, $coleccion) {
        $mysql->AbrirConexion();
        $consulta = $mysql->consulta("SELECT * FROM c_usuario");
        if ($mysql->num_rows($consulta) > 0) {
            while ($resultados = $mysql->fetch_array($consulta)) {
                $usuario = new clspFLUsuario();

                $usuario->idusuario = $resultados['id_usuario'];
                $usuario->correo = $resultados['cmpcorreo'];
                $usuario->contrasena = $resultados['cmpcontrasena'];
                $usuario->nombre = $resultados['cmpnombre'];
                $usuario->apellidoPaterno = $resultados['cmpapellidoPaterno'];
                $usuario->apellidoMaterno = $resultados['cmpapellidoMaterno'];
                $usuario->tipoUsuario=$resultados['id_tipoUsuario'];

                $coleccion->usuarios [] = $usuario;
                //  echo json_encode($coleccion);
            }
            return 1;
        }

        return 0;
        $mysql->CerrarConexion();
    }

    public static function agregarUsuarios($vmySql,$vflturistas) {
      
        
//       $vmySql = new MySql();
//      $vmySql->AbrirConexion();
//        $vmySql->start_transaction();
        try {
//It sets sql statement in order to add new user
            $vsql = "INSERT INTO c_usuario(cmpcorreo,cmpcontrasena, cmpnombre,cmpapellidoPaterno,cmpapellidoMaterno,id_tipoUsuario) ";
            $vsql.="VALUES('" . $vflturistas->correo . "'";
            $vsql.=", '" . $vflturistas->contrasena . "'";
            $vsql.=", '" . $vflturistas->nombre . "'";
            $vsql.=", '" . $vflturistas->apellidoPaterno . "'";
            $vsql.=", '" . $vflturistas->apellidoMaterno . "'";
            $vsql.=", '" . $vflturistas->tipoUsuario . "')";





            if ($vmySql->consulta($vsql)) {

                $id_ultimo_insert = mysql_insert_id();
                $vflturistas->idusuario = $id_ultimo_insert;

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
    
    
    
    
    public  static function verificaradmin($vflusuarioadmin,$vpass,$vmySql){
        
         try {
            $consulta = $vmySql->consulta("SELECT * FROM `c_usuario` WHERE cmpcorreo=\"$vflusuarioadmin->correo\" AND cmpcontrasena=\"$vpass\"");
            if ($consulta) {
                if ($vmySql->ObtenerNumeroFilasAfectadas() != 1) {
                    return 0;
                }
            }
            unset($consulta);
            return 1;
        } catch (Exception $vexception) {
            throw new Exception($vexception->getMessage(), $vexception->getCode());
        }
        
        
        
    }
    
    
    
    public static function Obtenerdatosadmin($vflusuarioadmin, $vmySql){
        
         try {

            $consulta = $vmySql->consulta("SELECT * from c_usuario where c_usuario.cmpcorreo=\"$vflusuarioadmin->correo\"");
            if ($vmySql->ObtenerNumeroFilasAfectadas($consulta) == 1) {
                $resultados = $vmySql->fetch_array($consulta);


                $vflusuarioadmin->idusuario = $resultados["id_usuario"];
                $vflusuarioadmin->nombre = $resultados["cmpnombre"];
                $vflusuarioadmin->apellidoPaterno = $resultados["cmpapellidoPaterno"];
                $vflusuarioadmin->apellidoMaterno = $resultados["cmpapellidoMaterno"];
                $vflusuarioadmin->tipoUsuario = $resultados["id_tipoUsuario"];
                
              
            } else {

                return 0;
            }

            unset($consulta);
            return 1;
        } catch (Exception $vexception) {

            throw new Exception($vexception->getMessage(), $vexception->getCode());
        }
    }
    

}
