<?php
      $nombres=$_GET['nombres'];
      $apellidos=$_GET['apellidos'];
      $direccion=$_GET['direccion'];

      if ($nombres!="" && $apellidos!="" && $direccion!="")
      {
            include("conexion.php");
            $conexion = $conn;

            $sql = "INSERT INTO datos_usuarios(nombres,apellidos,direccion) VALUES('$nombres','$apellidos','$direccion')";
  		      $result = pg_query($conexion,$sql);
      }
      header("Location:listar_usuarios.php");
?>
