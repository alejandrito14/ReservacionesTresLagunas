<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include '../Model/capafisica/clspFLAsignarPaqueteActividad.php';
require_once (dirname(dirname(__FILE__)) . '/capafisica/clspFLAsignarPaqueteActividad.php');

/**
 * Description of clspDLAsignarPaqueteActividad
 *
 * @author Alejandro hdez g
 */
class clspDLAsignarPaqueteActividad {

    //put your code here
    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    public static function asignarPaqueteActividad($vmySql, $vflAsignarPaqueteActividad) {
//             $vmySql = new MySql();
//             $vmySql->AbrirConexion();

        try {
//It sets sql statement in order to add new asignarpaqueteActividad


            for ($i = 0; $i < count($vflAsignarPaqueteActividad->id_actividad); $i++) {

                $vsql = "INSERT INTO c_asignacionpaqueteactividad(id_paquete,id_actividad) ";
                $vsql.="VALUES('" . $vflAsignarPaqueteActividad->id_paquete . "'";

                $vsql.=", '" . $vflAsignarPaqueteActividad->id_actividad[$i] . "')";

                if ($vmySql->consulta($vsql)) {

                    if ($vmySql->ObtenerNumeroFilasAfectadas() != 1) {
                        return 0;
                    }
                }
            }

            unset($vsql, $vmySql);
            //   echo '1';
            return 1;
        } catch (Exception $vexcepcion) { //It catches exception /It returns exception code catched
            throw new Exception($vexcepcion->getMessage(), $vexcepcion->getCode());
        }
    }
    
    
    
    
    
    
    
        public static function eliminarPaqueteActividad($vmySql, $id) {
        try {
            $consulta = $vmySql->consulta("DELETE FROM c_asignacionpaqueteactividad WHERE id_paquete=\"$id\" ");

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

}
