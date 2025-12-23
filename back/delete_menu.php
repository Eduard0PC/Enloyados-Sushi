<?php 
$id =$_GET ['id'];
require "conexion.php";

$borrar = "DELETE FROM menu WHERE id = '$id'";

$resultado = mysqli_query($conectar, $borrar);
  
if ($resultado) {
    echo "<script>
              alert('SE ELIMINO EL PLATILLO CORRECTAMENTE');
              window.location = '../vermenu.php';
          </script>";
}

?>