

<?php

include_once '../Model/capafisica/clspFLCabania.php';

class clspDLCabania {

    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    public static function listarCabania($mysql, $coleccion) {

        $consulta = $mysql->consulta("SELECT * FROM c_cabania");

        if ($mysql->num_rows($consulta) > 0) {
            while ($resultados = $mysql->fetch_array($consulta)) {
                $cabania = new clspFLCabania();

                $cabania->idcabania = $resultados['id_cabania'];
                $cabania->nombre = $resultados['cmpnombre'];
                $cabania->tarifa = $resultados['cmptarifa'];
                $cabania->descripcion = $resultados['cmpdescripcion'];
                $cabania->cantidadPersonas=$resultados['cmpcantidadPersonas'];




                $coleccion->cabanias [] = $cabania;
                // echo json_encode($coleccion);
            }
            return 1;
        }

        return 0;
    }
    
    public static function listarCabaniaporid($mysql, $coleccion,$nombre){
        
        $consulta = $mysql->consulta("SELECT * FROM c_cabania WHERE cmpnombre like '%".$nombre."%'");

        if ($mysql->num_rows($consulta) > 0) {
            while ($resultados = $mysql->fetch_array($consulta)) {
                $cabania = new clspFLCabania();

                $cabania->idcabania = $resultados['id_cabania'];
                $cabania->nombre = $resultados['cmpnombre'];
                $cabania->tarifa = $resultados['cmptarifa'];
                $cabania->descripcion = $resultados['cmpdescripcion'];




                $coleccion->cabanias [] = $cabania;
                // echo json_encode($coleccion);
            }
            return 1;
        }

        return 0;  
        
        
    }

    public static function eliminar_cabania($vmysql, $id) {
        try {
            $consulta = $vmysql->consulta("DELETE FROM c_cabania WHERE id_cabania=\"$id\" ");

            if ($consulta) {

                if ($vmysql->ObtenerNumeroFilasAfectadas() != 1) {
                    return 0;
                }
            }
            unset($consulta, $vmysql);

            return 1;
        } catch (Exception $vexcepcion) {

            throw new Exception($vexcepcion->getMessage(), $vexcepcion->getCode());
        }
    }

    public static function editarCabania($vmySql, $vflcabania) {
        try {
           // $vsql = "UPDATE c_cabania SET cmpnombre=\"$vflcabania->nombre\",cmpdescripcion=\"$vflcabania->descripcion\",cmptarifa=\"$vflcabania->tarifa\"  WHERE id_cabania=\"$vflcabania->idcabania\" ";
            $consulta = $vmySql->consulta("UPDATE c_cabania SET cmpnombre=\"$vflcabania->nombre\",cmpdescripcion=\"$vflcabania->descripcion\",cmptarifa=\"$vflcabania->tarifa\", cmpcantidadPersonas=\"$vflcabania->cantidadPersonas\"  WHERE id_cabania=\"$vflcabania->idcabania\" ");

            if ($consulta) {

                if ($vmySql->ObtenerNumeroFilasAfectadas() != 1) {
                    return 0;
                }
               
            }

            unset($consulta, $vmySql);
            return 1; 
        } catch (Exception $vexcepcion) {

            throw new Exception($vexcepcion->getMessage(), $vexcepcion->getCode());
        }
    }

    public static function insertarCabania($vmySql, $vflcabania) {

        try {
//It sets sql statement in order to add new cabaña
//            echo '<pre>';
//            var_dump($vflcabania);
//            echo '<pre>';
            $vsql = "INSERT INTO c_cabania(cmpnombre,cmptarifa,cmpdescripcion,cmpcantidadPersonas) ";
            $vsql.="VALUES('" . $vflcabania->nombre . "'";
            $vsql.=", '" . $vflcabania->tarifa . "'";
            $vsql.=", '" . $vflcabania->descripcion . "'";
            $vsql.=", '" . $vflcabania->cantidadPersonas . "')";


            if ($vmySql->consulta($vsql)) {

                if ($vmySql->ObtenerNumeroFilasAfectadas() != 1) {
                    return 0;
                }
            }


            unset($vsql, $vmySql);
           
            return 1;
        } catch (Exception $vexcepcion) { //It catches exception /It returns exception code catched
            throw new Exception($vexcepcion->getMessage(), $vexcepcion->getCode());
        }
    }

}
?>