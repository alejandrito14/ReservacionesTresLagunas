<?php


/**
 * Description of clspFLCabania
 *
 * @author Alejandro hdez g

 */

class clspFLCabania
{
    public $idcabania;
    public $nombre;
    public $tarifa;
    public $descripcion;
    public $cantidadPersonas;


   function __construct() {
         
         $this->idcabania=0;
         $this->nombre=0;
         $this->tarifa=0;
         $this->descripcion=0;

     }

      function __destruct() {

      unset($idcabania);
      unset($nombre);
      unset($tarifa);
      unset($descripcion);
         
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

?>
