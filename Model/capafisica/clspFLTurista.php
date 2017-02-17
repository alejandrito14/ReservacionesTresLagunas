<?php


/**
 * Description of clspTurista
 *
 * @author Alejandro hdez g

 */
//include '../Model/capafisica/clspFLUsuario.php';
require_once (dirname(dirname(__FILE__)) . '/capafisica/clspFLUsuario.php');


class clspFLTurista extends clspFLUsuario 
{
    public $numeroTelefono;
    public $lugarOrigen;
    public $fechaNacimiento;
    
      public function __construct() {
         
         //parent::__construct($id_usuario,$correo,$contrasena,$nombre,$apellidoPaterno,$apellidoMaterno);

         $this->numeroTelefono=0;
         $this->lugarOrigen=0;
         $this->fechaNacimiento=0;

     }

     public function __destruct() {

      unset($numeroTelefono);
      unset($lugarOrigen);
      unset($fechaNacimiento);
         
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
