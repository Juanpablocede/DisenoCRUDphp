<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Modificar Usuarios</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/hoja_estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	</head>
	<body>
    <?php
        $id=$_GET['id'];
        $nombres=$_GET['nombres'];
        $apellidos=$_GET['apellidos'];
        $direccion=$_GET['direccion'];
    ?>
	<form action="../php/clase_modificar_usuarios.php" method="POST" id="formulario" name="formulario">
  <div class="row w-100 justify-content-center">
    <div class="col-md-8 card card-content">
			<div class="row">
				<div class="col-4 pl-0 mb-1">
					<h4>
					Modificar Usuarios <i class="fa text-primary fa-briefcase" aria-hidden="true"></i>
					</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-12 p1-0 mb-1">
				</div>
				<div class="col-12 p1-0 mb-1">
				</div>
			</div>
      <div class="row">
        <div class="p-1 col-md-12">
          <!--<label class="type="hidden" text-secondary" for="nombres">Codigo</label>!-->
          <input class="form-control required" type="hidden" name="id" id="id" value="<?php echo $id?>" placeholder="código usuario">
        </div>
        <div class="p-1 col-md-6">
          <label class=" text-secondary" for="nombres">Nombre</label>
          <input class="form-control required" type="text" name="nombres" id="nombres" value="<?php echo $nombres?>" placeholder="nombres usuario">
        </div>
        <div class="p-1 col-md-6">
          <label class=" text-secondary" for="apellidos">Apellidos</label>
          <input class="form-control required" type="text" name="apellidos" id="apellidos" value="<?php echo $apellidos?>" placeholder="apellidos usuario">
        </div>
        <div class="p-1 col-md-12">
          <label class=" text-secondary" for="direccion">Direccion</label>
          <input class="form-control required" type="text" name="direccion" id="direccion" value="<?php echo $direccion ?>" placeholder="direccion usuario">
        </div>

        <div class="col-md-6">
            <button class="form-control btn btn-primary" type="submit" name="guardar" id="guardar" >Guardar
              <i class="fas fa-save"></i>
            </button>
        </div>
        <div class="col-md-6">
            <a href="../php/listar_usuarios.php" class="form-control btn btn-primary" name="salir"  id="salir">Salir
              <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
      </div>
    </div>
  </div>
</form>
		<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../js/validaciones.js"></script>
	</body>
</html>
