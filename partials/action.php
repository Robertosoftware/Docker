<?php
session_start();
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
        mysqli_set_charset($db, 'utf8');
if (isset($_POST['cambiar_password'])) {
    $password3 = mysqli_real_escape_string($db, $_POST['password3']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $password4 = mysqli_real_escape_string($db, $_POST['password4']);
    $correo = mysqli_real_escape_string($db, $_POST['correo']);
if ($password3 == $password4) {
    $password6 = md5($password2);
  	$query = "SELECT * FROM user_register WHERE correo='$correo' AND password='$password6'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
    $password7 = md5($password4);
  	  $query = "Update user_register set password='$password7'  WHERE correo='$correo'";
  	$results = mysqli_query($db, $query);
  	  header('location: ../index.php#!/Cambio-contraseña');
  	}else {
  		echo $password2;
        echo $correo;
  	}
} else{
    header('location: ../index.php#!/Error-contraseña');
}  
}
?>