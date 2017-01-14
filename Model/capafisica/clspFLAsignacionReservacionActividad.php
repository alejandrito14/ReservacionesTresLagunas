<?php
/**
 * Description of clspFLAsignacionReservacionActividad
 *
 * @author Alejandro hdez g
 */
class clspFLAsignacionReservacionActividad {
    public $idreservacion;
    public $idactividad;
    public function __construct() {
        $this->idactividad=0;
        $this->idreservacion=0;
    }

    public function __destruct() {
        unset($idreservacion);
        unset($idactividad);
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
