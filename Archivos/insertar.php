<?php
	//echo $_POST['titulo'];
	//echo isset($_POST['nombre']);
	//var_dump(isset($_POST['nombre']));
	//var_dump(!empty($_POST['titulo']));

	if (isset($_POST['titulo']) ) {
		if (!empty($_POST['titulo'])) {
			//establecer conexion
			$db = mysqli_connect("127.0.0.1", "root", "", "bd_libros");

			//$sql = 'INSERT INTO libro (titulo) VALUES ("juego 2")';
			
			//$sql = 'INSERT INTO libro (titulo) VALUES ("'.$_POST["titulo"].'")';
			$sql = "INSERT INTO libro (titulo) VALUES ('".$_POST["titulo"]."')";

			echo $sql;
			$db->query($sql);
			$db->close();
		} else {
			echo "la variable esta vacia";
		}
	} else {
		echo "Error la variable no esta definida";
	}

	/*
	if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {

		//establecer conexion
		$db = mysqli_connect("127.0.0.1", "root", "", "bd_libros");

		//$sql = 'INSERT INTO libro (titulo) VALUES ("juego 2")';
		
		//$sql = 'INSERT INTO libro (titulo) VALUES ("'.$_POST["titulo"].'")';
		$sql = "INSERT INTO libro (titulo) VALUES ('".$_POST["titulo"]."')";

		echo $sql;
		$db->query($sql);
		$db->close();

	} else {
		echo "Error la varible no esta definda o no tiene valores";
	}
	*/
	

?>