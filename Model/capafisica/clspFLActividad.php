<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clscActividad
 *
 * @author Alejandro hdez g
 */
class clspFLActividad {
    public $idActividad;
    public $nombreActividad;
    public $tarifa;
    public $detalle;
    
      public function __construct() {
          $this->idActividad=0;
          $this->nombreActividad=0;
          $this->tarifa=0;
          $this->detalle=0;
         
     }

     public function __destruct() {
         
         unset($idactividad);
         unset($nombreActividad);
         unset($tarifa);
         unset($detalle);
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
