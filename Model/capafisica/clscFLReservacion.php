<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clscFLReservacion
 *
 * @author Alejandro hdez g
 */
class clscFLReservacion {
    
    public $reservaciones;
    public function __construct() {
        $this->reservaciones=array();
        
    }

    public function __destruct() {
        unset($reservaciones);
    }

}
