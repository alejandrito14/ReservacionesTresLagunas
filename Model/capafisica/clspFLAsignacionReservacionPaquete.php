<?php



/**
 * Description of clspFLAsignacionReservacionPaquete
 *
 * @author Alejandro hdez g
 */
class clspFLAsignacionReservacionPaquete {
    public $idreservacion;
    public $idpaquete;
    public function __construct() {
        $this->idpaquete=0;
        $this->idreservacion=0;
    }

    public function __destruct() {
     unset($idreservacion);
     unset($idpaquete);
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
