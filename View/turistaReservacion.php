<?php 
include 'session_star.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tres lagunas |Turista reservacion </title>
        <script src="../Resource/js/jquery.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="../Resource/css/style_1.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../Resource/css/social-icons.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../Resource/css/errores.css" type="text/css" media="screen"/>
      
        <script type="text/javascript" src="../Resource/js/jquery-ui-1.8.13.custom.min.js"></script>
        <script type="text/javascript" src="../Resource/js/easing.js"></script>
        <script type="text/javascript" src="../Resource/js/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="../Resource/js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="../Resource/js/menu_pegajoso.js"></script>
<!--        <script type="text/javascript" src="../Resource/js/custom1.js"></script>-->

         <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
<!--        <script src="../Resource/js/jquery-functions.js"></script>
        <script src="../Resource/js/reservacion.js"></script> -->
        <!-- Isotope -->
        <script src="../Resource/js-webshim/minified/polyfiller.js"></script>
        
<!--        <script src="../Resource/js/jquery.isotope.min.js"></script>-->
        <script src="../Resource/js/jquery.min.js"></script>
       <script src="../Resource/js/turistasdatos.js" type="text/javascript"></script>

     

    

        <!-- Nivo slider -->
        <link rel="stylesheet" href="../Resource/css/nivo-slider.css" type="text/css" media="screen" />
        <script src="../Resource/js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
        <!-- ENDS Nivo slider -->

        <!-- tabs -->
        <link rel="stylesheet" href="../Resource/css/tabs.css" type="text/css" media="screen" />
        <script type="text/javascript" src="../Resource/js/tabs.js"></script>
        <!-- ENDS tabs -->

        <!-- prettyPhoto -->
        <script type="text/javascript" src="../Resource/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <link rel="stylesheet" href="../Resource/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
        <!-- ENDS prettyPhoto -->

        <!-- superfish -->
        <link rel="stylesheet" media="screen" href="../Resource/css/superfish.css" /> 

        <script type="text/javascript" src="../Resource/js/superfish-1.4.8/js/hoverIntent.js"></script>
        <script type="text/javascript" src="../Resource/js/superfish-1.4.8/js/superfish.js"></script>
        <script type="text/javascript" src="../Resource/js/superfish-1.4.8/js/supersubs.js"></script>
        <!-- ENDS superfish -->

        <!-- poshytip -->
        <link rel="stylesheet" href="../Resource/js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
        <link rel="stylesheet" href="../Resource/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
<!--        <script type="text/javascript" src="../Resource/js/poshytip-1.0/src/jquery.poshytip.min.js"></script>-->
        <!-- ENDS poshytip -->

        <!-- Tweet -->

        <script src="../Resource/js/tweet/jquery.tweet.js" type="text/javascript"></script> 
        <!-- ENDS Tweet -->

        <!-- Fancybox -->
        <link rel="stylesheet" href="../Resource/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<!--        <script type="text/javascript" src="../Resource/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>-->
        <!-- ENDS Fancybox -->



        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="../Resource/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../Resource/css/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="../Resource/css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../Resource/build/css/custom3.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="../Resource/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap -->
        <script src="../Resource/js/bootstrap.min.js"></script>
    </head>

    <body class="home">
            <div id="turistas"> <?php echo $_SESSION['idusuario']; ?>  </div>

        <!-- Menu -->
        <div id="menu">
            <!-- HEADER -->
            <div id="header">
                <!-- wrapper-header -->
                <div class="wrapper">
                    <a href="PrincipalTurista.php"><img id="logo" src="../Resource/img/logo.png" alt="Nova" /></a>

                </div>
                <!-- ENDS wrapper-header -->                    
            </div>
            <!-- ENDS HEADER -->



            <!-- ENDS menu-holder -->
            <div id="menu-holder">
                <!-- wrapper-menu -->
                <div class="wrapper">
                    <!-- Navigation -->
                    <ul id="nav" class="sf-menu">
                        <li class="current-menu-item"><a href="PrincipalTurista.php">Home<span class="subheader">Welcome</span></a></li>
                        <li><a href="">Servicios<span class="subheader">Selecciona un servicio</span></a>
                            <ul>

                                <li><a href="Cabanas_panel.php"><span>Cabañas</span></a></li>
                                <li><a href="Paquetes_panel.php"><span>Paquetes</span></a></li>
                                <li><a href="Actividades_panel.php"><span> Actividades</span></a></li>

                            </ul>
                        </li>

                        <li><a href="turistaReservacion.php">Reservaciones<span class="subheader">Reserva aqui</span></a>
                            <ul>
                                <li><a href=""><span> Reserva aqui</span></a></li>
                                <li><a href="misReservaciones.php"><span> Tus reservaciones </span></a></li>

                            </ul>
                        </li>

                    </ul>


                    <!-- Navigation -->
                </div>
                <!-- top -->

                <div class="wrapper2 navbar-right ">

                    <!-- user -->
                    <ul id="nav2" class="sf-menu ">

                            <li><a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img src="../Resource/img/3.jpg" alt="">Turista<span class="subheader"><div id="datos"></div></span></a>

                            <ul>

                                <li><a href=""><span>mensages</span></a></li>
                                <li><a href="cerrar.php"><span>cerrar sesion</span></a></li>

                            </ul>
                        </li>



                    </ul>


                    <!-- user -->
                </div>

                <!-- ends top -->
                <!-- wrapper-menu -->
            </div>
            <!-- ENDS menu-holder -->
        </div>

        <!-- ENDS Menu -->


        <div id="x_content">


            <form id="formreservacion" name="formreservacion" class="form-group" method="POST">


                <div id="reservacion">
                    <div class="login_wrapper">
                        <div class="">
                            <section class="login_content"> 
                                <h1>Reservacion </h1>
                                <input id="txtturista" name="txtturista" type="hidden" value="<?php echo $_SESSION['idusuario']; ?>"  class="form-control">

                                <div class="form-group">
                                    <label for="fecha_na" class="control-label">Fecha de Entrada</label>
                                    <input id="txtfechaentrada" name="txtfechaentrada" type="date"  placeholder="YYYY-MM-DD" data-date-split-input="true" class="form-control">
                                      <div id="mensaje1" class="errores"> Ingresa la fecha de entrada</div>
                                </div>
                                <div class="form-group">
                                    <label for="fecha_na" class="control-label">Fecha de salida</label>
                                    <input id="txtfechasalida" name="txtfechasalida" type="date" placeholder="YYYY-MM-DD" data-date-split-input="true" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nombre" class="control-label">Cantidad de personas</label>
                                    <input id="cantidad" name="txtcantidadpersonas" type="text" class="form-control">
                                </div>    

                                <div class="col-md-6">
                                    <button id="btnconsulta"  class="btn btn-primary"  type="button"   >Consultar disponibilidad</button>                
                                </div>
                            </section>

                        </div>
                    </div>

                </div>


            
           
                <div id="seleccionar">
                    </br>
                    </br>
                    </br>


                    <center><div id="content"></div></center>

                    <div class="x_title">
                        <center>  <h2>Catálogo de cabañas</h2></center>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row ">


                            <div id="cabanias"> 

                            </div>
                            <div class="col-md-6 col-md-10">
                                <button id="btnsiguiente"  class="btn btn-success"  type="button"   >Siguiente</button>                
                            </div>   
                        </div>



                    </div>


                    <div class="modal fade" id="Detalles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">Detalles</h4>
                                </div>
                                <div class="modal-body">

                                    

                                        <label class="control-label ">Nombre: </label>
                                        <input class="form-control " id="nombrec" readonly/>


                                        <label class="control-label ">Descripcion: </label>
                                        <input class="form-control " id="descripcion" readonly/>

                                        <label class="control-label ">Tarifa: </label>
                                        <input class="form-control " id="tarifa" readonly/>
                                        <label class="control-label ">Cantidad personas: </label>
                                        <input class="form-control " id="cpersonas" readonly/>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>


                                  
                                </div>
                            </div>
                        </div>
                    </div>


                </div>  
                
                <div id="vacio">
                    
                    <div class="login_wrapper">
                        <section class="login_content"> 
                    <center><div id="content2">
                            
                        </div></center>

                    <div class="x_title">
                        <center>                         
                            <a href="turistaReservacion.php" class="btn btn-info" role="button">Intente de nuevo</a>
                        </center>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
               
                        <div class="row ">



                            </div>
                          
                        </div>
                        </section>
                    </div>

                    </div>
                    
             


                <div id="siguiente">

                    </br>
                    </br>
                    </br>


                    <div class="x_title">
                     <h2>Catálogo de paquetes</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                       

                        <div class="row ">

                            <div id="paquetes"> 

                            </div>
                        </div>



                    </div>



                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <button id="btnatras"  class="btn btn-success"  type="button"   >Atrás</button>                
                                </div> 
                            </div> 

                            <div class="col-md-6">
                                <div class="">
                                    <button id="btnsiguiente2"  class="btn btn-success"  type="button"   >Siguiente</button>                
                                </div> 

                            </div>

                        </div>



                    </div>

                </div>




                             <div id="siguiente2">
                          

                        <div class="clearfix"></div>
                   
                    <div class="x_content">
                                        <h2>Catálogo de Actividades</h2>

                        <div class="row ">


                            <div id="actividades"> 

                            </div>
                        </div>



                    </div>



                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                    <button id="btnatras"  class="btn btn-success"  type="button"   >Atrás</button>                
                                </div> 
                            </div> 

                            <div class="col-md-6">
                                <div class="">
                                    <button id="btnreservar"  class="btn btn-success"  type="button"   >Realizar reservacion</button>                
                                </div> 

                            </div>

                        </div>



                    </div>
                
                                
                            </div>
                              







            </form>
    </div>

        <!-- FOOTER -->
        <div id="footer">
            <!-- wrapper-footer -->
            <div class="wrapper">
                <!-- footer-cols -->
                <ul id="footer-cols">
                    <li class="col">
                        <h6>Pages</h6>
                        <ul>
                            <li class="page_item"><a href="PrincipalTurista.php">Home</a></li>
                            <li class="page_item"><a href="features.html">Features</a></li>
                            <li class="page_item"><a href="blog.html">Blog</a></li>
                            <li class="page_item"><a href="portfolio.html">Portfolio</a></li>
                            <li class="page_item"><a href="gallery.html">Gallery</a></li>
                            <li class="page_item"><a href="contact.html">Contact</a></li>
                        </ul>
                    </li>


                    <li class="col">
                        <h6>About the theme</h6>

                    </li>

                </ul>
                <!-- ENDS footer-cols -->
            </div>
            <!-- ENDS wrapper-footer -->
        </div>
        <!-- ENDS FOOTER -->
        <!-- Bottom -->
        <div id="bottom">
            <!-- wrapper-bottom -->
            <div class="wrapper">
                <div id="bottom-text">2011 Tres lagunas all rights reserved. <a href="http://www.luiszuno.com"> link.com</a> </div>
                <!-- Social -->
                <ul class="social ">
                    <li><a href="http://www.facebook.com" class="poshytip  facebook" title="Become a fan"></a></li>
                    <li><a href="http://www.twitter.com" class="poshytip twitter" title="Follow our tweets"></a></li>
                    <li><a href="http://www.dribbble.com" class="poshytip dribbble" title="View our work"></a></li>
                    <li><a href="http://www.addthis.com" class="poshytip addthis" title="Tell everybody"></a></li>
                    <li><a href="http://www.vimeo.com" class="poshytip vimeo" title="View our videos"></a></li>
                    <li><a href="http://www.youtube.com" class="poshytip youtube" title="View our videos"></a></li>
                </ul>
                <!-- ENDS Social -->
                <div id="to-top" class="poshytip" title="To top"></div>
            </div>
            <!-- ENDS wrapper-bottom -->
        </div>
        <!-- ENDS Bottom -->
<script type="text/javascript">
	$(document).ready(function(){


webshim.setOptions('forms-ext', {
    //replaceUI: 'auto',
    types: 'date'
});
webshim.polyfill('forms forms-ext');
	});

</script>
        <script src="../Resource/js/reservacion.js"></script> 
        <script src="../Resource/js/jquery-functions.js"></script>
       
        <script src="../Resource/js/actividades.js"></script>


      

        <script src="../Resource/js/paquetes.js"></script>

    </body>
</html>
