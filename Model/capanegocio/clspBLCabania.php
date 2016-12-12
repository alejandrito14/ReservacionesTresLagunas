
<?php

/**
 * 
 */
include_once '../Model/capadatos/clspDLCabania.php';
include_once '../Model/conexcion.php';

class clspBLCabania {

    function __construct() {
        # code...
    }

    function __destruct() {
        
    }

    public static function listar_cabania($coleccion) {


        $mysql = new Mysql();
        $mysql->AbrirConexion();

        $result = clspDLCabania::listarCabania($mysql, $coleccion);

        return $result;

        $mysql->CerrarConexion();
    }
    
    public static function listar_cabaniaporid($coleccion,$nombre){
        
        $mysql = new Mysql();
        $mysql->AbrirConexion();

        $result = clspDLCabania::listarCabaniaporid($mysql, $coleccion,$nombre);

        return $result;

        $mysql->CerrarConexion();
    }

    public static function editar_cabania($vflcabania) {
        $vmySql = new Mysql();
        $vmySql->AbrirConexion();

        $result = clspDLCabania::editarCabania($vmySql, $vflcabania);
          
            return $result;
        
        $vmySql->CerrarConexion();
    }

    public static function eliminar_cabania($id) {
        $vmysql = new Mysql();
        $vmysql->AbrirConexion();

        $result = clspDLCabania::eliminar_cabania($vmysql, $id);


        return $result;

        $mysql->CerrarConexion();
    }

    public static function insertar_cabania($vflcabania) {

        $vmySql = new Mysql();
        $vmySql->AbrirConexion();

        if ($result = clspDLCabania::insertarCabania($vmySql, $vflcabania) == 1) {
          
            return 1;
        } else {
            return 0;
        }
        $vmySql->CerrarConexion();
    }

}

?>