<html>
<head>
	<title>Ejemplo</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>librerias/bootstrap-3.3.7/css/bootstrap.css">

	<script type="text/javascript" src="<?php echo base_url(); ?>librerias/jquery-3.2.0.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>librerias/bootstrap-3.3.7/js/bootstrap.js"></script>


	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>librerias/table/bootstrap-table.css">
	<!-- JS de bootstrap-table y sus extensiiones -->
	<script type="text/javascript" src="<?php echo base_url(); ?>librerias/table/bootstrap-table.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>librerias/table/extensions/export/bootstrap-table-export.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>librerias/tableExport/tableExport.js"></script>

	<script type="text/javascript">
		$(function(){
			var table = $('#table-videojuegos');
			var baseUrl = '<?php echo base_url();?>';

			table.bootstrapTable({
				exportTypes: ['txt', 'excel', 'doc'],
				idField: 'id',
				pagination: true,
				pageLength: 5,
				striped: true,
				search: true,
				smartDisplay: true,
				showColumns: true,
				showExport: true,
				showRefresh: true,
				url: baseUrl+'inicio2/get_videojuegos_json',
				columns: [{
					sortable: true,
					visible: true,
					field: 'id',
					title: 'ID'
				}, {
					sortable: true,
					field: 'titulo',
					title: 'titulo'
				}, {
					sortable: true,
					field: 'descripcion',
					title: 'Descripción'
				}, {
					sortable: true,
					field: 'clasificacion',
					title: 'clasificacion',
				}, {
					sortable: true,
					field: 'nombre',
					title: 'nombre',
				},{
					sortable: true,
					field: 'imagen',
					title: 'imagen',
				}, {
					sortable: true,
					field: 'precio',
					title: 'precio',
				}]
			});
		});
	</script>

</head>
<body>
	<div class="container">


		<?php echo menu(); ?>

	

		<div class='row'>
			<div class='col-md-12'>
				<h1>Hola mundo</h1>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-12'>
				<?php  
					//print_r($consolas);
					echo "<br>";
					echo "<br>";
					print_r($videojuego);
					echo "<br>";
					echo "<br>";
					//echo $nombre;
				?>

			</div>
		</div>
		<div class='row'>
			<div class='col-md-12'>
				<table class="table">
					<thead>
						<tr>
							<th>Titulo</th>
							<th>descripcion</th>
							<th>clasificacion</th>
							<th>tipo</th>
							<th>imagen</th>
							<th>precio</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td colspan="6" class="text-center">pie de tabla</td>
						</tr>
					</tfoot>
					<tbody>
						<?php 
							foreach ($videojuego as $row) {
								echo "<tr>";
								echo "<td>".$row['titulo']."</td>";
								echo "<td>".$row['descripcion']."</td>";
								echo "<td>".$row['clasificacion']."</td>";
								echo "<td>".$row['nombre']."</td>";
								echo "<td>".$row['imagen']."</td>";
								echo "<td>".$row['precio']."</td>";
								echo "</tr>";
							}
						?>
					</tbody>
					
				</table>
				
			</div>
		</div>
		<div class='row'>
			<div class='col-md-12'>
				<table class="table">
					<thead>
						<tr>
							<th>Titulo</th>
							<th>descripcion</th>
							<th>clasificacion</th>
							<th>tipo</th>
							<th>imagen</th>
							<th>precio</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td colspan="6" class="text-center">pie de tabla</td>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach ($videojuego as $row): ?>
							<tr>
								<td><?php echo $row['titulo']; ?></td>
								<td><?php echo $row['descripcion']; ?></td>
								<td><?php echo $row['clasificacion']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['imagen']; ?></td>
								<td><?php echo $row['precio']; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
					
				</table>
				
			</div>
		</div>

		<div class='row'>
			<div class='col-md-12'>
				<table id="table-videojuegos" class="table table-bordered">
				</table>
			</div>	
		</div>	

	</div>
	

	


</body>
</html>