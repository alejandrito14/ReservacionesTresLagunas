<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/**
 * Description of clspFLAsignarPaqueteActividad
 *
 * @author Alejandro hdez g
 */
class clspFLAsignarPaqueteActividad   {
    //put your code here
    
    public $id_paquete;
    public $id_actividad;
    public $nombrePaquete;
    public $detallePaquete;
    public $tarifaPaquete;
    
    
    
    public function __construct() {
        $this->id_actividad=0;
        $this->id_paquete=0;
        $this->nombrePaquete=0;
        $this->detallePaquete=0;
        $this->tarifaPaquete=0;
        
    }

    public function __destruct() {
        unset($id_paquete);
        unset($id_actividad);
        unset($nombrePaquete);
        unset($detallePaquete);
        unset($tarifaPaquete);
    }
       
    public function __get($atributo) {
        if (isset($atributo)) {
            throw new Exception("Propiedad no existe : $valor");
        } else {
            return $this->$atributo;
        }
    }

    public function __set($atributo, $valor) {
        if (isset($atributo)) {
            throw new Exception("Propiedad no existe: $valor");
        } else {


            $this->$atributo = $valor;
        }
    }

}
