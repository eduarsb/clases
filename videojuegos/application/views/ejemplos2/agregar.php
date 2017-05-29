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

		<h1>Agregar</h1>
		<form method="post">
			<label>Nombre</label>
			<input type="text" name="nombre" placeholder="nombre">
			<?php echo $nombre;?>
			<label>Empresa</label>
			<input type="text" name="empresa">
			<?php echo $empresa;?>
			<input type="submit" value="Enviar">

		</form>
	</div>


</body>
</html>