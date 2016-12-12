<?php

class Mysql {

    private $conexion;
    private $total_consultas;

    public function AbrirConexion() {

        if (!isset($this->conexion)) {
            $this->conexion = (mysql_connect("localhost", "root", NULL))
                    or die(mysql_error());
            mysql_select_db("reservacion", $this->conexion) or die(mysql_error());
        }
    }

    public function start_transaction() {
       mysql_query("START TRANSACTION",$this->conexion);
    }

    public function rollback() {
       mysql_query("ROLLBACK",$this->conexion);
    }

    public function commit() {
        mysql_query("COMMIT",$this->conexion);
    }

    public function consulta($consulta) {
        $this->total_consultas++;
        mysql_query("SET NAMES 'utf8'",$this->conexion);
        $resultado = mysql_query($consulta, $this->conexion);
        if (!$resultado) {
            echo 'MySQL Error: ' . mysql_error();
            exit;
        }
        return $resultado;
    }

    public function fetch_array($consulta) {
        return mysql_fetch_array($consulta);
    }
    public function ObtenerNumeroFilasAfectadas(){
        
        return mysql_affected_rows();
        
    }
    

    public function num_rows($consulta) {
        return mysql_num_rows($consulta);
    }

    public function getTotalConsultas() {
        return $this->total_consultas;
    }

    public function CerrarConexion() {
        return mysql_close();
    }

}
