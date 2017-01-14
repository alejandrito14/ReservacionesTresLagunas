<?php

session_start();
$_SESSION['idusuario']=array();
session_destroy();
header("Location:login-turista.php ");

?>