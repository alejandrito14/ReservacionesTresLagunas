<?php
include 'session_star.php';
?>
<!DOCTYPE  html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tres lagunas | Paquetes</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../Resource/css/style_1.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../Resource/css/social-icons.css" type="text/css" media="screen" />
        <!--[if IE 8]>
                <link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
        <![endif]-->
        <!-- ENDS CSS -->	

        <!-- GOOGLE FONTS 
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->

        <!-- JS -->
        <script type="text/javascript" src="../Resource/js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="../Resource/js/jquery-ui-1.8.13.custom.min.js"></script>
        <script type="text/javascript" src="../Resource/js/easing.js"></script>
        <script type="text/javascript" src="../Resource/js/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="../Resource/js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="../Resource/js/menu_pegajoso.js"></script>
        <script type="text/javascript" src="../Resource/js/custom.js"></script>

        <!-- Isotope -->
        <script src="../Resource/js/jquery.isotope.min.js"></script>
        <script src="../Resource/js/jquery.min.js"></script>
        <script src="../Resource/js/paquetesmostrar.js"></script>
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
        <link rel="stylesheet" media="screen" href="../Resource/css/superfish-left.css" /> 
        <script type="text/javascript" src="../Resource/js/superfish-1.4.8/js/hoverIntent.js"></script>
        <script type="text/javascript" src="../Resource/js/superfish-1.4.8/js/superfish.js"></script>
        <script type="text/javascript" src="../Resource/js/superfish-1.4.8/js/supersubs.js"></script>
        <!-- ENDS superfish -->

        <!-- poshytip -->
        <link rel="stylesheet" href="../Resource/js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
        <link rel="stylesheet" href="../Resource/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
        <script type="text/javascript" src="../Resource/js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
        <!-- ENDS poshytip -->

        <!-- Tweet -->
        <link rel="stylesheet" href="../Resource/css/jquery.tweet.css" media="all"  type="text/css"/> 
        <script src="../Resource/js/tweet/jquery.tweet.js" type="text/javascript"></script> 
        <!-- ENDS Tweet -->

        <!-- Fancybox -->
        <link rel="stylesheet" href="../Resource/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
        <script type="text/javascript" src="../Resource/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <!-- ENDS Fancybox -->
        <link rel="stylesheet" media="screen" href="../Resource/css/image.css" />
        <!-- Custom Theme Style -->
        <link href="../Resource/build/css/custom3.css" rel="stylesheet">

        <link href="../Resource/css/bootstrap.min.css" rel="stylesheet">
        <script src="../Resource/js/bootstrap.min.js"></script>	


    </head>

    <body class="home">
            <div id="turistas"> <?php echo $_SESSION['idusuario']; ?>  </div>

        <!-- HEADER -->
        <div id="header">
            <!-- wrapper-header -->
            <div class="wrapper">
                <a href="PrincipalTurista"><img id="logo" src="../Resource/img/logo.png" alt="Nova" /></a>

            </div>
            <!-- ENDS wrapper-header -->					
        </div>
        <!-- ENDS HEADER -->


        <!-- Menu -->
        <div id="menu">



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

                        <li><a href="">Reservaciones<span class="subheader">Reserva aqui</span></a>
                            <ul>
                                <li><a href="turistaReservacion.php"><span> Reserva aqui</span></a></li>
                                <li><a href="misReservaciones.php"><span> Tus reservaciones </span></a></li>

                            </ul>
                        </li>

                    </ul>
                    <!-- Navigation -->
                </div>
                <!-- wrapper-menu -->
                <div class="wrapper2 navbar-right ">

                    <!-- top user -->
                    <ul id="nav2" class="sf-menu ">

                            <li><a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img src="../Resource/img/3.jpg" alt="">Turista<span class="subheader"><div id="datos"></div></span></a>

                            <ul>

                                <li><a href=""><span>mensages</span></a></li>
                                <li><a href="cerrar.php"><span>cerrar sesion</span></a></li>

                            </ul>
                        </li>



                    </ul>



                </div>
                <!-- ends top user -->
            </div>
            <!-- ENDS menu-holder -->
        </div>
        <!-- ENDS Menu -->






        <div id="x_content">

            <div id="paquetes"></div>

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

                            <form class="form-group" id="formMostrar" name="formEditar" >


                                <div id="veractividades"></div>



                            </form>
                        </div>

                    </div>
                </div>
            </div>




        </div>


        <div id="main">
            <!-- wrapper-main -->
            <div class="wrapper">

                <!-- headline -->

                <!-- ENDS headline -->

                <!-- content -->
                <div id="content">


                    <div class="panes">




                    </div>
                    <!-- ENDS TABS -->



                </div>
                <!-- ENDS content -->
            </div>
            <!-- ENDS wrapper-main -->

        </div>
        <!-- ENDS MAIN -->

        <!-- FOOTER -->
        <div id="footer">
            <!-- wrapper-footer -->
            <div class="wrapper">
                <!-- footer-cols -->
                <ul id="footer-cols">
                    <li class="col">
                        <h6>Páginas</h6>
                        <ul>
                            <li class="page_item"><a href="PrincipalTurista.php">Principal</a></li>
                            <li class="page_item"><a href="Cabanas_panel.php">Cabañas</a></li>
                            <li class="page_item"><a href="Paquetes_panel.php">Paquetes</a></li>
                            <li class="page_item"><a href="turistaReservacion.php">Reservacion</a></li>

                        </ul>
                    </li>


                    <li class="col">
                        <h6>Visita Tres Lagunas</h6>

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



    </body>
</html>
