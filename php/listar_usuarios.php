<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="../css/hoja_estilo.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>

<body>
      <div class="titulo_lista container card-table">
          <div class="row w-100">
              <div class="col-10 float-center">
                  <h2>Listado de usuarios</h2>
              </div>
              <div class="col-2 justify-content-end">
                <a href="formulario_ingresar_usuarios.php"><img class="ingresar"src="../imagenes/ingresar_registro.png"></a>
                <!--<a class="ingresar btn btn-primary" href="formulario_ingresar_usuarios.php" name="ingresar" id="ingresar">
                  <i class="fas fa-plus-circle"></i>
                </a>!-->
              </div>
          </div>
      </div>
  <table class="table table-hover" align="center">
    <thead>
        <tr class="primerafila">
          <th scope="col" class="ocultar">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Dirección</th>
          <th scope="col" class="sin">&nbsp;</th>
          <th scope="col" class="sin">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include("conexion.php");
        $conexion = $conn;
        $sql = "SELECT id, nombres, apellidos, direccion FROM datos_usuarios ORDER BY Id";
        $resultado = pg_query($conexion,$sql);
        while($resultados = pg_fetch_object($resultado))
        {
          echo "<tr>";
                echo "<td class='ocultar'>".$resultados->id."</td>";
                echo "<td>".$resultados->nombres."</td>";
                echo "<td>".$resultados->apellidos."</td>";
                echo "<td>".$resultados->direccion."</td>";
                echo "<td><a href='clase_borrar_usuarios.php?id=$resultados->id' name='delete' id='delete' class='glyphicon glyphicon-trash btn btn-danger btn-xs delete'></a></td>";
                echo "<td><a href='formulario_modificar_usuarios.php?id=$resultados->id&nombres=$resultados->nombres&apellidos=$resultados->apellidos&direccion=$resultados->direccion' name='update' id='update' class='glyphicon glyphicon-pencil btn btn-primary btn-xs update'></a></td>";
            echo "</tr>";
        }
    ?>
  </tbody>
</table>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/validaciones.js"></script>
</body>
</html>
