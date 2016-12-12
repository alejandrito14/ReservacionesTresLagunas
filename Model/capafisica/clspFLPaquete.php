<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clscPaquete
 *
 * @author Alejandro hdez g
 */
class clspFLPaquete {
    
    public $idPaquete;
    public $nombrePaquete;
    public $tarifa;
    public $detalle;
    
      public function __construct() {
          $this->idPaquete;
          $this->nombrePaquete;
          $this->tarifa;
          $this->detalle;
         
     }

     public function __destruct() {
         unset($idPaquete);
         unset($nombrePaquete);
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
      if(isset($atributo)){
          throw new Exception("Propiedad no existe: $valor");
      
      }else{
        
        
        $this->$atributo = $valor;
      }
    }

    
}
