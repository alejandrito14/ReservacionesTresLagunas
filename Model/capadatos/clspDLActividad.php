<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clspDLActividad
 *
 * @author Alejandro hdez g
 */
include_once '../Model/capafisica/clspFLActividad.php';

class clspDLActividad {

    //put your code here

    public static function listarActividades($mysql, $coleccion) {

        $consulta = $mysql->consulta("SELECT * FROM c_actividad");

        if ($mysql->num_rows($consulta) > 0) {
            while ($resultados = $mysql->fetch_array($consulta)) {
                $actividad = new clspFLActividad();

                $actividad->idActividad = $resultados['id_actividad'];
                $actividad->nombreActividad = $resultados['cmpnombreActividad'];
                $actividad->tarifa = $resultados['cmptarifa'];
                $actividad->detalle = $resultados['cmpdetalle'];




                $coleccion->actividades [] = $actividad;
                // echo json_encode($coleccion);
            }
            return 1;
        }

        return 0;
    }

    public static function eliminar_actividad($vmysql, $id) {
        try {
            $consulta = $vmysql->consulta("DELETE FROM c_actividad WHERE id_actividad=\"$id\" ");

            if ($vmysql->consulta($consulta)) {

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

    public static function insertarActividad($vmySql, $vflactividad) {


        try {
//It sets sql statement in order to add new activity

            $vsql = "INSERT INTO c_actividad(cmpnombreActividad,cmptarifa,cmpdetalle) ";
            $vsql.="VALUES('" . $vflactividad->nombreActividad . "'";
            $vsql.=", '" . $vflactividad->tarifa . "'";
            $vsql.=", '" . $vflactividad->detalle . "')";

            if ($vmySql->consulta($vsql)) {

                if ($vmySql->ObtenerNumeroFilasAfectadas() != 1) {
                    return 0;
                }
            }


            unset($vsql, $vmySql);

            return 1;
        } catch (Exception $vexcepcion) { //It catches exception /It returns exception code catched
            throw new Exception($vexcepcion->getMessage(), $vexcepcion->getCode());
        }
    }

    public static function editarActividad($vmySql, $vflactividad) {
        try {
//            
            // $vsql = "UPDATE c_cabania SET cmpnombre=\"$vflcabania->nombre\",cmpdescripcion=\"$vflcabania->descripcion\",cmptarifa=\"$vflcabania->tarifa\"  WHERE id_cabania=\"$vflcabania->idcabania\" ";
            $consulta = $vmySql->consulta("UPDATE c_actividad SET cmpnombreActividad=\"$vflactividad->nombreActividad\",cmptarifa=\"$vflactividad->tarifa\",cmpdetalle=\"$vflactividad->detalle\"  WHERE id_actividad=\"$vflactividad->idActividad\" ");

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
