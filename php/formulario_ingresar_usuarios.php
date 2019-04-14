<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ingresar Usuarios</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/hoja_estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	</head>
	<body>
	<form action="../php/clase_ingresar_usuarios.php" method="GET" id="formulario" name="formulario">
  <div class="row w-100 justify-content-center">
    <div class="col-md-8 card card-content">
			<div class="row">
				<div class="col-4 pl-0 mb-1">
					<h4>
						Ingresar Usuarios <i class="fa text-primary fa-briefcase" aria-hidden="true"></i>
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
        <div class="p-1 col-md-6">
          <label class=" text-secondary" for="nombres">Nombre</label>
          <input class="form-control required" type="text" name="nombres" id="nombres" placeholder="nombres usuario">
        </div>
        <div class="p-1 col-md-6">
          <label class=" text-secondary" for="apellidos">Apellidos</label>
          <input class="form-control required" type="text" name="apellidos" id="apellidos" placeholder="apellidos usuario">
        </div>
        <div class="p-1 col-md-12">
          <label class=" text-secondary" for="direccion">Direccion</label>
          <input class="form-control required" type="text" name="direccion" id="direccion" placeholder="direccion usuario">
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
		<!--<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>!-->
  	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../js/validaciones.js"></script>
		<!--
		<script>
		$(document).ready(function()
		{
					$("#guardar").click(function()
						{
								var nombres 		= $("#nombres").val();
								var apellidos 	= $("#apellidos").val();
								var direccion		= $("#direccion").val();
								if (nombres == "" || apellidos == "" || direccion == "")
								{
									alert("Algunos de los campos nombres, apellidos o direccion no puede estar en blanco");
								}

						});
		});
		</script>
		!-->
	</body>
</html>
