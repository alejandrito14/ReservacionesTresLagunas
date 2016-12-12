<?php

/********************************************************
Name:
Autor name:
Modification autor name:
Creation date:
Modification date:
Description:
********************************************************/

/**
 * Description of ColeccionUsuario
 *
 * @author Alejandro hdez g
 */
class clscFLUsuario {
    //put your code here
    public  $usuarios;
    public function __construct() {
        $this->usuarios=array();
           }

    public function __destruct() {
        
        unset($usuarios);
        
    }

}
