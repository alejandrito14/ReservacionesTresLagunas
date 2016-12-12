<?php

/* * ******************************************************
  Name:
  Autor name:
  Modification autor name:
  Creation date:
  Modification date:
  Description:
 * ****************************************************** */

class clspFLUsuario {

    public $idusuario;
    public $correo;
    public $contrasena;
    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $tipoUsuario;

    public function __construct() {
        $this->idusuario = 0;
        $this->correo = 0;
        $this->contrasena = 0;
        $this->nombre = 0;
        $this->apellidoPaterno = 0;
        $this->apellidoMaterno = 0;
        $this->tipoUsuario=0;
    }

    public function __destruct() {

        unset($idusuario);
        unset($correo);
        unset($contrasena);
        unset($nombre);
        unset($apellidoPaterno);
        unset($apellidoMaterno);
        unset($tipoUsuario);
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
