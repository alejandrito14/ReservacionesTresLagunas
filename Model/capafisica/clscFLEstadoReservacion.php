
<?php
/**
* 
*/
class clscFLEstadoReservacion 
{

	public $idEstado;
    public $estado;
	
	function __construct()
	{
		$this->idEstado=0;
		$this->estado=0;
	}


	function __destruct(){
		
		unset($idEstado);
		unset($estado);

	}


	  public function __get($atributo) {
          return $this->$atributo;
         
     }

     public function __set($atributo, $valor) {
          $this->$atributo = $valor;
         
     }
}





  ?>