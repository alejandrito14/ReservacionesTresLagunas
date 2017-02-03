

<?php

/**
 * 
 */
include '../Model/capafisica/clspFLTurista.php';

class clspDLTurista {

    function __construct() {
        
    }

    function __destruct() {
        
    }

    public static function listarTuristas($mysql, $coleccion) {
        $consulta = $mysql->consulta("SELECT c_usuario.id_usuario,c_usuario.cmpcorreo,c_usuario.cmpcontrasena,c_usuario.cmpnombre,c_usuario.cmpapellidoPaterno,c_usuario.cmpapellidoMaterno,c_turista.cmpnumeroTelefono,c_turista.cmplugarOrigen,c_turista.cmpfechaNacimiento FROM c_usuario INNER JOIN c_turista ON c_usuario.id_usuario=c_turista.id_usuario");
        if ($mysql->num_rows($consulta) > 0) {
            while ($resultados = $mysql->fetch_array($consulta)) {
                $turista = new clspFLTurista();


                $turista->idusuario = $resultados['id_usuario'];
                $turista->correo = $resultados['cmpcorreo'];
                $turista->contrasena = $resultados['cmpcontrasena'];
                $turista->nombre = $resultados['cmpnombre'];
                $turista->apellidoPaterno = $resultados['cmpapellidoPaterno'];
                $turista->apellidoMaterno = $resultados['cmpapellidoMaterno'];
                $turista->numeroTelefono = $resultados['cmpnumeroTelefono'];
                $turista->lugarOrigen = $resultados['cmplugarOrigen'];
                $turista->fechaNacimiento = $resultados['cmpfechaNacimiento'];

                $coleccion->turistas [] = $turista;
                //  echo json_encode($coleccion);
            }
            return 1;
        }

        return 0;
    }

    
    
    public  static function obtener_turistaporid($mysql, $coleccion,$idturista){
         $consulta = $mysql->consulta("SELECT c_usuario.id_usuario,c_usuario.cmpcorreo,c_usuario.cmpcontrasena,c_usuario.cmpnombre,c_usuario.cmpapellidoPaterno,c_usuario.cmpapellidoMaterno,c_usuario.id_tipoUsuario,c_turista.cmpnumeroTelefono,c_turista.cmplugarOrigen,c_turista.cmpfechaNacimiento FROM c_usuario INNER JOIN c_turista ON c_usuario.id_usuario=c_turista.id_usuario WHERE c_turista.id_usuario=\"$idturista\"");
        if ($mysql->num_rows($consulta) > 0) {
            while ($resultados = $mysql->fetch_array($consulta)) {
                $turista = new clspFLTurista();


                $turista->idusuario = $resultados['id_usuario'];
                $turista->correo = $resultados['cmpcorreo'];
                $turista->contrasena = $resultados['cmpcontrasena'];
                $turista->nombre = $resultados['cmpnombre'];
                $turista->apellidoPaterno = $resultados['cmpapellidoPaterno'];
                $turista->apellidoMaterno = $resultados['cmpapellidoMaterno'];
                $turista->numeroTelefono = $resultados['cmpnumeroTelefono'];
                $turista->lugarOrigen = $resultados['cmplugarOrigen'];
                $turista->fechaNacimiento = $resultados['cmpfechaNacimiento'];
                $turista->tipoUsuario=$resultados['id_tipoUsuario'];

                $coleccion->turistas [] = $turista;
                //  echo json_encode($coleccion);
            }
            return 1;
        }

        return 0;
        
        
    }
    public static function agregarTurista($vmySql, $vflturistas) {

        try {
//It sets sql statement in order to add new turist

            $vsql = "INSERT INTO c_turista(id_usuario,cmpnumeroTelefono,cmplugarOrigen, cmpfechaNacimiento) ";
            $vsql.="VALUES('" . $vflturistas->idusuario . "'";
            $vsql.=", '" . $vflturistas->numeroTelefono . "'";
            $vsql.=", '" . $vflturistas->lugarOrigen . "'";
            $vsql.=", '" . $vflturistas->fechaNacimiento . "')";

            if ($vmySql->consulta($vsql)) {

                if ($vmySql->ObtenerNumeroFilasAfectadas() != 1) {
                    return 0;
                }
            }


            unset($vsql, $vmySql);

            return 1;
        } catch (Exception $vexcepcion) { //It catches exception /It returns exception code catched
            throw new Exception($vexcepcion->getMessage(), $vexcepcion->getCode());
//            $vflturistas->idusuario = $resultados['id_usuario'];
        }
    }

    public static function inicio_sesion($vmySql, $coleccion, $usuario, $contrasena) {
        try {

            $consulta = $vmySql->consulta("SELECT * FROM `c_usuario` WHERE cmpcorreo=\"$usuario\" AND cmpcontrasena=\"$contrasena\"");

            if ($vmySql->num_rows($consulta) > 0) {
                while ($resultados = $vmySql->fetch_array($consulta)) {
                    $turista = new clspFLTurista();


                    $turista->idusuario = $resultados['id_usuario'];
                    $turista->nombre = $resultados['cmpnombre'];
                    $turista->correo = $resultados['cmpcorreo'];


                    $coleccion->turistas [] = $turista;
                    //  echo json_encode($coleccion);
                }
                return 1;
            }
            unset($vmySql);
            return 0;
        } catch (Exception $vexcepcion) {

            throw new Exception($vexcepcion->getMessage(), $vexcepcion->getCode());
        }
    }

    public static function verificarturista($vflturista, $vpass, $vmySql) {
        try {
            $consulta = $vmySql->consulta("SELECT * FROM `c_usuario` WHERE cmpcorreo=\"$vflturista->correo\" AND cmpcontrasena=\"$vpass\"");


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

    public static function Obtenerdatosturista($vflturista, $vmySql) {

        try {
            $consulta = $vmySql->consulta("SELECT c_usuario.id_usuario,c_usuario.cmpnombre,c_usuario.cmpapellidoPaterno,c_usuario.cmpapellidoMaterno,c_usuario.id_tipoUsuario,c_turista.cmpnumeroTelefono,c_turista.cmplugarOrigen,c_turista.cmpfechaNacimiento FROM c_usuario INNER JOIN c_turista ON c_usuario.id_usuario=c_turista.id_usuario where c_usuario.cmpcorreo=\"$vflturista->correo\"");
            if ($vmySql->ObtenerNumeroFilasAfectadas($consulta) == 1) {
                $resultados = $vmySql->fetch_array($consulta);


                $vflturista->idusuario = $resultados["id_usuario"];
                $vflturista->nombre = $resultados["cmpnombre"];
                $vflturista->apellidoPaterno = $resultados["cmpapellidoPaterno"];
                $vflturista->apellidoMaterno = $resultados["cmpapellidoMaterno"];
                $vflturista->numeroTelefono = $resultados["cmpnumeroTelefono"];
                $vflturista->lugarOrigen = $resultados["cmplugarOrigen"];
                $vflturista->fechaNacimiento = $resultados["cmpfechaNacimiento"];
                $vflturista->tipoUsuario = $resultados["id_tipoUsuario"];
            } else {

                return 0;
            }

            unset($consulta);
            return 1;
        } catch (Exception $vexception) {

            throw new Exception($vexception->getMessage(), $vexception->getCode());
        }
    }
    
        public static function eliminarturista($vmysql, $id) {
        try {
            $consulta = $vmysql->consulta("DELETE FROM c_usuario WHERE id_usuario=\"$id\" ");

            if ($consulta) {

                if ($vmysql->ObtenerNumeroFilasAfectadas() != 1) {
                    return 0;
                }
            }
            unset($consulta, $vmysql);

            return 1;
        } catch (Exception $vexcepcion) {

            throw new Exception($vexcepcion->getMessage(), $vexcepcion->getCode());
        }
    }
    
    
    

}
?>