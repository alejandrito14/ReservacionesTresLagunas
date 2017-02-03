<?php

/**
 * Description of clspFLasignacionCabania
 *
 * @author Alejandro hdez g
 */
class clspFLasignacionCabania {
    
    public $idreservacion;
    public $idcabania;
    
    public function __construct() {
        $this->idreservacion=0;
        $this->idcabania=0;
        
    }

    public function __destruct() {
        unset($idreservacion);
        unset($idcabania);
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
