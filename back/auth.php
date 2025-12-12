<?php
require "conexion.php";

$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);

$comparar = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

$resultado= mysqli_query($conectar, $comparar);

if (mysqli_num_rows($resultado) > 0) {
  echo 'Si existe el usuario';
  session_start();
  $_SESSION["autentificado"] = "SI";
  header("Location: ../dashboard.php");
} else{
  echo '
    <script>
    alert("Error en la autentificacion");
    location.href="../login.php?errorusuario=SI"
  </script>';
}


exit();
?>