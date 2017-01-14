<?php


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
    public $comprobantePago;
    public $idusuario;
    public $idestadoReservacion;
//    public $idcabania;
//    public $idpaquete;
//    public $idactividad;
    
      public function __construct() {
        $this->idreservacion=0;
        $this->fechaEntrada=0;
        $this->fechaSalida=0;
        $this->numeroDeActividades=0;
        $this->cantidadPersonas=0;
        $this->comprobantePago=0;
        $this->idusuario=0;
        $this->idestadoReservacion=0;
        $this->idcabania=0;
        $this->idpaquete=0;
        $this->idactividad=0;
         
     }

     public function __destruct() {

      unset($idreservacion);
      unset($fechaEntrada);
      unset($fechaSalida);
      unset($numeroDeActividades);
      unset($cantidadPersonas);
      unset($comprobantePago);
      unset($idusuario);
      unset($idestadoReservacion);
      unset($idcabania);
      unset($idpaquete);
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
