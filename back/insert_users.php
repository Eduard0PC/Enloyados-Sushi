<?php

require "conexion.php";

$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password']; 

$comparar = "SELECT * FROM users WHERE email = '$email'";
$verificar_usuario = mysqli_query($conectar, $comparar);

if (mysqli_num_rows($verificar_usuario) > 0) {
  echo '
  <script>
    alert("ESTE CORREO YA ESTA REGISTRADO");
    location.href="../users.php";
  </script>';
  exit();
}

$insertar = "INSERT INTO users (name, email, password)
VALUES ('$name', '$email', '$password')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
    echo '
    <script>
      alert("USUARIO REGISTRADO CORRECTAMENTE");
      location.href="../users.php";
    </script>
    ';
} else {
    echo '
    <script>
      alert("ERROR: NO SE GUARDARON LOS DATOS");
      location.href="../users.php";
    </script>
    ';
}

?>
