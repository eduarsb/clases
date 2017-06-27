<html>
<head>
	<title>Agregar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>librerias/bootstrap-3.3.7/css/bootstrap.css">

	<script type="text/javascript" src="<?php echo base_url(); ?>librerias/jquery-3.2.0.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>librerias/bootstrap-3.3.7/js/bootstrap.js"></script>

	<script type="text/javascript">
	 	variable = 5;		
	 	variable = "cvcxjkvlx";		
	 	variable = true;		
		//$() = JQuery()
		function mosrtrarAlerta() {
			window.confirm("sometext");
		};	

		function crearItem(){
			console.log('agregar');
			var lista = $('#lista_ejemplo');

			//var item = $("<li></li>");
			//var bold = $("<strong>");
			//bold.text('elemento');

			//item.append(bold);
  
			var item = $("<li style='color: red; background: black'>elemento</li>");

			//item.append(bold);

			//lista.append($('<li>text</li>'));
			lista.append(item);

		};

		$(function () {
			
			//console.log($('#nombre').val('ejemplo'));

			btn_ajax = $('#btn_ajax');
			parrafo = $('#parrafo');

			btn_ajax.bind('click', function() {
				console.log('click');
				//crearItem();
				//parrafo.hide();

				var nombre = $('#nombre').val();


				$.ajax({
					url: 'http://localhost/clases/videojuegos/inicio2/agregar_ajax',
					type: 'POST',
					data: {'nombre': nombre, 'empresa' : $('#empresa').val()}
				})
				.done(function(datos){
					
					if (datos) {
						parrafo.text('Se agrego');
					} else {
						parrafo.text('No se agrego nada ');
					}
					console.log(datos);
					//var paciente = JSON.parse(datos)[0];
					

				});
				return false;


			});

			/*
			btn_ajax.bind('mouseover', function() {
				console.log('over');
				parrafo.show();
			});
			*/

			//btn_ajax.click(mosrtrarAlerta);





			
			
		});

	</script>

</head>
<body>
	<div class="container">

		<?php echo menu(); ?>

		<form method="post">
			<label>Nombre</label>
			<input type="text" name="nombre" id="nombre" placeholder="nombre" value='<?php if(isset($nombre)) { echo $nombre;} ?>'>
			
			<label>Empresa</label>
			<input type="text" name="empresa" id="empresa" placeholder="empresa" value='<?php if(isset($empresa)) {echo $empresa;} ?>'>
			
			<input type="submit" value="Enviar">
			<input type="button"  id="btn_ajax" value="Enviar ajax">


		</form>



		<p id='parrafo'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<ul id="lista_ejemplo">
		</ul>
	</div>

</body>
</html>