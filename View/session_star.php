<?php

session_start();
if (!isset($_SESSION['idusuario'])) {
  header('Location: login-turista.php');
die();

}

