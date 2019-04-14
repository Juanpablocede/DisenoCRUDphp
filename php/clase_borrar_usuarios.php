<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>

</head>

<body>
  <?php
      $id=$_GET['id'];

      include("conexion.php");
      $conexion = $conn;
      $sql = "DELETE FROM datos_usuarios WHERE id='$id'";
  		$result = pg_query($conexion,$sql);
      header("Location:listar_usuarios.php");
  ?>
</body>
</html>
