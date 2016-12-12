<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clspBLActividad
 *
 * @author Alejandro hdez g
 */
include_once '../Model/capadatos/clspDLActividad.php';
include_once '../Model/conexcion.php';
class clspBLActividad {
    //put your code here
     function __construct() {
        # code...
    }

    function __destruct() {
        
    }

    public static function listar_Actividades($coleccion) {


        $mysql = new Mysql();
        $mysql->AbrirConexion();

        $result = clspDLActividad::listarActividades($mysql, $coleccion);
        
        return $result;
      
        $mysql->CerrarConexion();
    }
    
    
    public static function insertar_actividad($vflactividad) {

        $vmySql = new Mysql();
        $vmySql->AbrirConexion();

        if ($result = clspDLActividad::insertarActividad($vmySql, $vflactividad) == 1) {
           
            return 1;
        } else {
            return 0;
        }
        $vmySql->CerrarConexion();
    }
    
     public static function eliminar_actividad($id){
        $vmysql=new Mysql();
        $vmysql->AbrirConexion();
        
        $result=  clspDLActividad::eliminar_actividad($vmysql, $id);
        
        
        return $result;
      
        $mysql->CerrarConexion();
        
        
    }
    
    public static function editar_actividad($vflactividad) {
        $vmySql = new Mysql();
        $vmySql->AbrirConexion();
//echo 'bien2';
// var_dump($vflactividad);
        $result = clspDLActividad::editarActividad($vmySql, $vflactividad);
          
            return $result;
        
        $vmySql->CerrarConexion();
    }

    
    

    
    
}
