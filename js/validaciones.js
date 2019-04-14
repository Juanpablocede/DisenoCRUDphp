$(document).ready(function()
{
	$("#guardar").click(function()
		{
				/*var nombres 		= $("#nombres").val();
				var apellidos 	= $("#apellidos").val();
				var direccion		= $("#direccion").val();*/
				if ($("#nombres").val() == "" || $("#apellidos").val() == "" || $("#direccion").val() == "")
				{
						alert("Algunos de los campos nombres, apellidos o direcciòn; no puede estar en blanco");
						if ($("#nombres").val() == "")
						{
							$("#nombres").css({ "background-color" : "red" , "border-bottom" : "solid #C6D0DA" });
						}
				}

				if ($("#nombres").val().trim().length > 50)
				{
						alert ("La longitud del campo nombres no puede tener mas de 50 caràcteres");
				}

				if ($("#apellidos").val().trim().length > 50)
				{
						alert ("La longitud del campo apellidos no puede tener mas de 50 caràcteres");
				}

				if ($("#direccion").val().trim().length > 200)
				{
						alert ("La longitud del campo direcciòn no puede tener mas de 20 caràcteres");
				}

		});

		$("#prueba").hover(function()
		{
			    $(this).css({ "background-color" : "red" , "border-bottom" : "solid #C6D0DA" });
		}, function()
		{
			    $(this).css( {"background-color" : "white" , "border-bottom" : "none" });
		});

		setTimeout(function(){
			$(".alert-success").fadeOut();
		}, 3000);

		$('#resultado').prop('disabled', true);
		var fecha = new Date();
		var ano = fecha.getFullYear();

		var select = $('#ano');
		for(var i=1900;i<=ano;i++)
		{
			select.append('<option id="any" value="'+i+'" >'+i+'</option>');
	 	}

		var options =
		{
			url: "http://localhost:8000/sfp-acciones-especificas/buscar",

			getValue: "nombre_accion_especifica",

			list: {
				match: {
					enabled: true
				}
			}
		};


		//Rutina para agregar opciones a un <select> Año
		function cargar_ano(domElement)
		{
			var fecha = new Date();
			var ano = fecha.getFullYear();
			disable.text = 'Año';
			var select = document.getElementsByName(domElement)[0];
			for(var i=1900;i<=ano;i++)
			{
				var option = document.createElement("option");
				option.text = i;
				select.add(option);
			}
		}

		function cargar_dias()
		{
			//var month = document.getElementById('mes').value;

			var month = $('#mes').val();

			switch(month)
			{
				case 'enero':
				case 'marzo':
				case 'mayor':
				case 'julio':
				case 'agosto':
				case 'octubre':
				case 'diciembre':
					var valormes = 31;
					break;
				case 'febrero':
					var valormes = 28;
					break;
				case 'abril':
				case 'junio':
				case 'septiembre':
				case 'noviembre':
					valormes = 30;
					break;
				default:
					alert('El mes no esta definido '+month);
			}

			var select = $('#diasmes');
			for(var i=1;i<=valormes;i++)
			{
				select.append('<option id="diasmes" value="'+i+'" >'+i+'</option>');
		 	}
		}

});
