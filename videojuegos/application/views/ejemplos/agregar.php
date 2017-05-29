<html>
<head>
	<title>Agregar</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>librerias/bootstrap-3.3.7/css/bootstrap.css">

	<script type="text/javascript" src="<?php echo base_url(); ?>librerias/jquery-3.2.0.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>librerias/bootstrap-3.3.7/js/bootstrap.js"></script>

</head>
<body>
	<div class="container">

		<?php echo menu(); ?>

		<div class="row">
			<div class="col-md-12">
			
				<form method="POST">
					<label>ID</label>
						<input name="id" type="text" value="<?php if(isset($id)) echo $id ?>" />

					<label>Nombre</label>
						<input name="nombre" type="text" value="<?php if(isset($nombre)) echo $nombre ?>" />

					<label>Empresa</label>
						<input name="empresa" type="text" value="<?php if(isset($empresa)) echo $empresa ?>" />

					<footer><input type="submit"/></footer>
				</form>

			</div>
		</div>

	</div>

</body>
</html>