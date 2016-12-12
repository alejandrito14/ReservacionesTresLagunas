<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tres lagunas |Turista logeo </title>
    <script src="../Resource/js/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="../Resource/css/bootstrap.min.css" rel="stylesheet">
    <!-- Materialize -->
    <link type="text/css" rel="stylesheet" href="../Resource/css/materialize.min.css"  media="screen,projection"/>
    <script type="text/javascript" src="../Resource/js/materialize.min.js"></script>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="../Resource/js/jquery-functions.js"></script>
      <script src="../Resource/js/ingreso_turista.js"></script>
    <!-- Font Awesome -->
    <link href="../Resource/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../Resource/css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../Resource/css/animate.min.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../Resource/build/css/custom.css" rel="stylesheet">
    <link href="../Resource/css/box.css" rel="stylesheet">

  </head>

  <body class="login">
      
       <header>
            <nav>
                <div class="nav-wrapper green">
                    <a href="#!" class="brand-logo"><i class="material-icons"><img src="../Resource/img/logo.png" class="imagen"></i></a>
                    <ul class="right hide-on-med-and-down">
                      
                    </ul>
                </div>
            </nav>

        </header>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              
              <div id="verificar">Usuario o contraseña invalido</div>
              <div id="alert">Campo email o contraseña vacio</div>

              <form id="formingreso" name="formingreso" >
              <h1>Login </h1>
              <div>
                  <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="Email" required="" />
              </div>
              <div>
                  <input type="password" class="form-control" id="txtcontrasena" name="txtcontrasena" placeholder="Password" required="" />
              </div>
              <div>
                  <button id="btningreso" type="button" class="btn btn-success"   >INGRESAR</button>                
                
                <a class="reset_pass" href="#">Perdiste tu contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Eres nuevo en el sitio?
                    <a href="turista.php" class="to_register"> Crea una cuenta</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa"></i> Visitanos!</h1>
                  <p>©2016 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      
      </div>
    </div>
    

  </body>
</html>
