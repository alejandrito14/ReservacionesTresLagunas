<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clspReservacion
 *
 * @author Alejandro hdez g
 */
class clspFLReservacion {
  
    public $idreservacion;
    public $fechaEntrada;
    public $fechaSalida;
    public $numeroDeActividades;
    public $cantidadPersonas;
    public $estado;
    public $comprobantePago;
    
    
      public function __construct() {
        $this->idreservacion=0;
        $this->fechaEntrada=0;
        $this->fechaSalida=0;
        $this->numeroDeActividades=0;
        $this->cantidadPersonas=0;
        $this->estado=0;
        $this->comprobantePago=0;
         
     }

     public function __destruct() {

      unset($idreservacion);
      unset($fechaEntrada);
      unset($fechaSalida);
      unset($numeroDeActividades);
      unset($cantidadPersonas);
      unset($estado);
      unset($comprobantePago);
         
     }
     
       public function __get($atributo) {
        if (isset($atributo)) {
            throw new Exception("Propiedad no existe : $valor");
        } else {
            return $this->$atributo;
        }
    }

    public function __set($atributo, $valor) {
      if(isset($atributo)){
          throw new Exception("Propiedad no existe: $valor");
      
      }else{
        
        
        $this->$atributo = $valor;
      }
    }

    
    
    
    
    
}
