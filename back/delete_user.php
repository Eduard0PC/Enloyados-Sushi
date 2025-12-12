<?php 
$id =$_GET ['id'];
require "conexion.php";

$borrar = "DELETE FROM users WHERE id = '$id'";

$resultado = mysqli_query($conectar, $borrar);
  
if ($resultado) {
    echo "<script>
              alert('SE ELIMINO EL USUARIO CORRECTAMENTE');
              window.location = '../verusers.php';
          </script>";
}

?>