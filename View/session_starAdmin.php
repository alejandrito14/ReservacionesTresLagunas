<?php

session_start();
if (!isset($_SESSION['idusuario'])) {
  header('Location: loginAdmin.php');
die();

}

