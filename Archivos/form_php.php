<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<form method="post" action="insertar.php">
		<label for="titulo">Titulo</label>
		<input type="text" name="titulo">
		<label >Genero</label>	
		<select>
			<?php
				$db = mysqli_connect("127.0.0.1", "root", "", "bd_libros");
				$sql = 'select genero from genero';
				$result = $db->query($sql);
				$db->close();

				while ($row = $result->fetch_array(MYSQLI_ASSOC)){
					echo "<option>";
					echo $row['genero'];
					echo "</option>";

					echo "<option>".$row['genero']."</option>";
				}

			?>
		</select>
		<input type="submit" value="enviar"/>
	</form>

</body>
</html>