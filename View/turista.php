<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Personalized -->

        <link href="../Resource/css/style1.css" rel="stylesheet" type="text/css" media="all" />
        <script src="../Resource/js/jquery.min.js"></script>
        <script src="../Resource/js/jquery-functions.js"></script>


        <script type="text/javascript" src="../Resource/js/materialize.min.js"></script>

        <link type="text/css" rel="stylesheet" href="../Resource/css/materialize.min.css"  media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>


    <body>
        <script type="text/javascript"> $(document).ready(function () {
                $('.parallax').parallax();
            });
        </script>	
        <header>
            <nav>
                <div class="nav-wrapper green">
                    <a href="#!" class="brand-logo"><i class="material-icons"><img src="../Resource/img/logo.png" class="imagen"></i></a>
                    <ul class="right hide-on-med-and-down">
                        <a href="login-turista.php">Entrar</a>
                    </ul>
                </div>
            </nav>

        </header>

        <div class="section grey darken-4"></div>

        <div class="parallax-container">
            <div class="parallax"><img src="../Resource/img/1.jpg"></div>
        </div>
        <div class="section black">

        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="../Resource/img/3.jpg"></div>
        </div>


        <div class="row">
            <div class="cont">
                <div class="encabezado">
                    <div class="cont2">Registro del Turista</div>

                    <form class="col s12" id="formregistro" name="formregistro">

                        <div class="row">
                            <div class="input-field color col s12">
                                <i class="material-icons prefix ">email</i>
                                <input id="txtemail" name="txtemail" type="email" class="validate">
                                <label for="">Correo</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field color col s12">
                                <i class="material-icons prefix ">https</i>
                                <input id="txtcontrasena" name="txtcontrasena" type="password" class="validate">
                                <label for="">Contraseña</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field color col s12">
                                <i class="material-icons prefix ">account_circle</i>
                                <input id="txtfirstName" name="txtfirstName" type="text" class="validate">
                                <label for="">Nombre</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field color col s12">
                                <i class="material-icons prefix ">person_pin</i>
                                <input id="txtapPaterno" name="txtapPaterno" type="text" class="validate">
                                <label for="">Apellido Paterno</label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="input-field color col s12">
                                <i class="material-icons prefix ">person_pin</i>
                                <input id="txtapMaterno" name="txtapMaterno" type="text" class="validate">
                                <label for="">Apellido Materno</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field color col s12">
                                <i class="material-icons prefix ">call</i>
                                <input id="txttelefono" name="txttelefono" type="text" class="validate">
                                <label for="">Telefono</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field color col s12">
                                <i class="material-icons prefix ">location_city</i>
                                <input id="txtLo" name="txtLo" type="text" class="validate">
                                <label for="">Lugar de Origen</label>
                            </div>
                        </div>

                        <label class="" for="">Fecha de Nacimiento</label>

                        <div class="row">
                            <div class="input-field color col s12">
                                <i class="material-icons prefix ">cake</i>
                                <input id="txtFecha_na" name="txtFecha_na" type="date" class="validate">

                            </div>
                        </div>
                        <div class="row">
                            <div class="alinear_btn">
                                <button id="btnenviar" class="btn btn-success" type="button"  >REGISTRAR</button>                
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>




        <a class="go-top" href="#">Subir</a>

        <footer class="page-footer green darken-1">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Centro Ecoturístico Tres Lagunas</h5>
                        <p class="grey-text text-lighten-4">Regístrate y reserva con nosostros</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text"> </h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="turista.php">Registro</a></li>
                            <li><a class="grey-text text-lighten-3" href="login-turista.php">Entrar</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2016 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">Derechos reservados</a>
                </div>
            </div>
        </footer>


        <!--<footer class="footer" >
          <div >
              
            <h4 >Centro Ecoturístico Tres Lagunas</h4>
                
                
                 </div>
                 
        
        
         <div >
              
            <h4>Visítanos ¡¡</h4>
                
                
                 </div>
        
                 
                 
        </footer>-->


    </div>
   <!-- <script src="../Resource/js/jquery-1.3.2.min.js"></script>-->
    <script src="../Resource/js/turista.js"></script>



</body>



</html>