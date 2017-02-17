<?php

include_once('../../Model/capafisica/clscFLReservacion.php');
include_once('../../Model/capanegocio/clspBLReservacion.php');
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

if (isset($_REQUEST['t']))
    $tipo = $_REQUEST['t'];
if ($tipo == 'pdf') {
    if (isset($_REQUEST['folio']))
        $idprotegido = $_REQUEST['folio'];

    $vcoleccion = new clscFLReservacion();
    $vobjeto = new clspBLReservacion();
    $vstatus = $vobjeto->ObtenerReservacionporFolio($idprotegido, $vcoleccion);

    if ($vstatus == 1) {
        $vdataResponse["reservacion"] = $vcoleccion;
    }

    //$reservacion= json_encode($vdataResponse);
//       echo $reservacion.'</br>';
//       
//       echo $vcoleccion->reservaciones[0]->idreservacion.'</br>';
//       echo $vcoleccion->reservaciones[0]->fechaEntrada.'</br>';
//       echo $vcoleccion->reservaciones[0]->fechaSalida.'</br>';
//       echo $vcoleccion->reservaciones[0]->numeroDeActividades.'</br>';
//       echo $vcoleccion->reservaciones[0]->cantidadPersonas.'</br>';
//       echo $vcoleccion->reservaciones[0]->idusuario.'</br>';
//       echo $vcoleccion->reservaciones[0]->idestadoReservacion.'</br>';

    $folio = $vcoleccion->reservaciones[0]->idreservacion;
    $fechaentrada = $vcoleccion->reservaciones[0]->fechaEntrada;
    $fechasalida = $vcoleccion->reservaciones[0]->fechaSalida;
    $numeroA = $vcoleccion->reservaciones[0]->numeroDeActividades;
    $cantidadp = $vcoleccion->reservaciones[0]->cantidadPersonas;
    $usuario = $vcoleccion->reservaciones[0]->idusuario;
    $estador = $vcoleccion->reservaciones[0]->idestadoReservacion;

    $html = "<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <title> PDF</title>

        <style> 
            body { font-family: arial;} 
            table {
                width: 80%;
                color:black;
                font-size:14px;
                font-family:arial;
                text-align: center;
                
              
            }

            thead {
                background-color: #eeeeee;

            }

            tbody {
                background-color: #ffffff;     
            }
         
            th,td {
                padding: 3pt;
            }           
            table.collapse {
                border-collapse: collapse;
                border-top: 1px solid black;
                border-bottom: 1px solid black;
            }
            .celda_right{
                border-right: 1px solid black;
            }
            .celda_left{
                border-left: 1px solid black;
            }         
            table.collapse th {
                border-top: 1px solid black;
                border-bottom: 1px solid black;
            }   
            imagen{


                margin-top:30px;

            }
            empresa{
                text-align: center;
                background-color:blue;


            }
        footer {
        background-color: #75C40F;
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 40px;
        color: white;
}
            .define {
                width:960px;
                margin:0 auto;
            }
            .detalle{
               
            }
        </style> 
    </head>
    <body>
        <header>


            <div class='imagen'>
                <img id='img' src='logo.png'/></div>
            <center>
                <div class='empresa'><h1>Centro Ecoturístico Tres Lagunas</h1>  </div></center>


        </header>

        <H3 class='detalle'> DATOS DE RESERVACION</H3> 


        <table class='collapse'> 
            <thead> 
                <tr> 
                    <th>FOLIO</th> 
                    <th>FECHA ENTRADA</th>
                    <th>FECHA SALIDA</th> 
                    <th>TOTAL A PAGAR</th> 
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <td class='celda_right'> $folio<br></td> 
                    <td class='celda_right'> $fechaentrada<br></td> 
                    <td class='celda_right'>$fechasalida<br></td> 
                    <td> <br><br></td> 
                </tr>           
            </tbody> 
            <tr> 
                                     
                    

            </tr> 
        </table>   
        
        <h4 class='detalle'>Detalles de la Reservacion</h4>
            <table class=''> 
            <thead> 
                <tr> 
                    <th>Cabaña</th> 
                    <th>Tarifa</th>
                  
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <td class=''> $folio<br></td> 
                    <td class=''> $fechaentrada<br></td> 
                    
                    <td> <br><br></td> 
                </tr>           
            </tbody> 
            
        </table>   
        
         <table class=''> 
            <thead> 
                <tr> 
                    <th>Paquete</th> 
                    <th>Tarifa</th>
                  
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <td class=''> $folio<br></td> 
                    <td class=''> $fechaentrada<br></td> 
                    
                    <td> <br><br></td> 
                </tr>           
            </tbody> 
            
        </table>   
        
           <table class=''> 
            <thead> 
                <tr> 
                    <th>Actividad</th> 
                    <th>Tarifa</th>
                  
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <td class=''>$folio<br></td> 
                    <td class=''>$fechaentrada<br></td> 
                    
                    <td> <br><br></td> 
                </tr>           
            </tbody> 
            
        </table>   
        <footer>
            <div class='define'>
                <p>Tres Lagunas</p>
            </div>
        </footer>

    </body> 
</html> 

 
 ";



    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait'); // (Opcional) Configurar papel y orientación portrait
    $dompdf->render(); // Generar el PDF desde contenido HTML
    $pdf = $dompdf->output(); // Obtener el PDF generado
    $dompdf->stream("mi_archivo.pdf"); // Enviar el PDF generado al navegador
//   
//    $dompdf = new DOMPDF();
//    $dompdf->load_html($html);
//    $dompdf->render();
//    $dompdf->stream("mi_archivo.pdf");
}
?>

