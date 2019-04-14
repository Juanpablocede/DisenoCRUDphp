<?php
      $id=$_POST['id'];
      $nombres=$_POST['nombres'];
      $apellidos=$_POST['apellidos'];
      $direccion=$_POST['direccion'];
      if ($nombres!="" && $apellidos!="" && $direccion!="")
      {
            include("conexion.php");
            $conexion = $conn;
            $sql = "UPDATE datos_usuarios SET ".
                   "nombres='$nombres', ".
                   "apellidos='$apellidos', ".
                   "direccion='$direccion' ".
                   "WHERE id='$id'";
            $result = pg_query($conexion,$sql);
      }
      header("Location:listar_usuarios.php");
?>
