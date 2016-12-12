<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clscFLPaquete
 *
 * @author Alejandro hdez g
 */
class clscFLPaquete {
    //put your code here
    public $paquetes;
    public function __construct() {
        $this->paquetes=array();
    }

    public function __destruct() {
        unset($paquetes);
    }

}
