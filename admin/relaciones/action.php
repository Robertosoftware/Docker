<?php
session_start();
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
        mysqli_set_charset($db, 'utf8');
if (isset($_GET['cusuario'])) {
         $edit = mysqli_real_escape_string($db, $_GET['cusuario']);
  	  $_SESSION['id_usuario'] = $edit;
        header('location: ../../index-admin.php#!/Usuario-consultar');
}
    
    
    
    ?>