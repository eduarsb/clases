<?php
/* Tipos de variable */
$data1 = 1; //Numericos
$data2 = 'var'; //Strings
$data3 = true; //Booleanos


//Imprimir el valor de la variable (no arreglos)
echo $data1;
echo "<br>";
echo $data2;
echo "<br>";
echo $data3;


//Imprime tanto variables con un solo valor como arreglos
print_r($data1);
echo "<br>";
print_r($data2);
echo "<br>";
print_r($data3);
echo "<br>";


//Imprime tanto variables con un solo valor como arreglos
//Ademas de mostrar el tipo y longitud de variable
var_dump($data1);
echo "<br>";
var_dump($data2);
echo "<br>";
var_dump($data3);
echo "<br>";


//Arreglos 3 maneras de hacer arreglos

//Manera 1
$arreglo = array('juan','perez','negro',34);

//Manera 2
$persona_1 = array(
	'nombre' => 'carlos', 
	'apellido' => 'perez', 
	'color' => 'negro', 
	'edad' => 34,
	'casado',
	0 => 'soltero'
	);
//Manera 3
$persona_2['nombre'] = 'maria';
$persona_2['apellido'] = 'perez';
$persona_2['color'] = 'caucasica';
$persona_2['edad'] = 34;

//--
$arreglo = array($persona_1, $persona_2);
//					0			1

//Formas de mostar arreglos
print_r($persona_1);
echo "<br><br>";
print_r($arreglo);
echo "<br><br>";
print_r($arreglo[0]);
echo "<br><br>";
print_r($persona_2['nombre']);
echo "<br><br>";
print_r($arreglo[0][0]);
echo "<br><br>";


//Arreglos ejemplo
//Ejemplo 1
$Artista_1 = array(
	'nombre'=>'Enrique Bunbury',
	$Album_1 = array(
		'nombre' => 'Licenciado Cantinas',
		$Cancion_1 = array(
			'nombre' => 'Mas alla'
		)
	),
	$Album_2 = array(
		'nombre' => 'Palosanto',
		$Cancion_1 = array(
			'nombre' => 'Despierta'
		)
	)
);

//Ejemplo 2
$artistas = array($Artista_1, $Artista_1);

//Ejemplo 3
$data['artistas']  = array(
	array(
		'nombre_art'=>'Enrique Bunbury',
		$Album_1 = array(
			'nombre_alb' => 'Licenciado Cantinas',
			$Cancion_1 = array(
				'nombre_can' => 'Mas alla'
			)
		),
		$Album_2 = array(
			'nombre_alb' => 'Palosanto',
			$Cancion_1 = array(
				'nombre_can' => 'Despierta'
			)
		)
	),
	array(
		'nombre_art'=>'desconocido',
		$Album_1 = array(
			'nombre_alb' => 'desconocido_1',
			$Cancion_1 = array(
				'nombre_can' => 'Cancion_1'
			)
		),
		$Album_2 = array(
			'nombre_alb' => 'desconocido_2',
			$Cancion_1 = array(
				'nombre_can' => 'Cancion_1'
			)
		)
	)
);

$data['disquera'] = 'disquera';

//Mas ejemplos
print_r($data['artistas'][0][0]);
echo "<br><br>";

//print_r($data['artistas']$Album_2['nombre_alb']$Cancion_1['nombre_can']); <- Tiene errores
echo "<br><br>";


//Ciclos para recorrer arreglos

$frutas = array('manzana', 'pera', 'piña','sandia','papaya','aguacate','naranja','fresa','uva');

//Metodo 1
foreach ($frutas as $value) {
	echo $value;
	echo "<br>";
}
echo "<br><br>";

//Metodo 2
foreach ($frutas as $key => $value) {
	echo $key;
	echo $value;
	echo "<br>";
}
echo "<br><br>";


$frutas = array(
	array(
		'nombre' => 'manzana',
		'color' => 'roja',
		'sabor' => 'dulce'
	),
	array(
		'nombre' => 'pera',
		'color' => 'verde',
		'sabor' => 'dulce'
	),
	array(
		'nombre' => 'piña',
		'color' => 'amarilla',
		'sabor' => 'agridulce'
	),
	array(
		'nombre' => 'sandia',
		'color' => 'verde',
		'sabor' => 'dulce'
	),
	array(
		'nombre' => 'papaya',
		'color' => 'naranja',
		'sabor' => 'paludo'
	)
);

print_r($frutas);
echo "<br><br>";

//Ejemplo 1
foreach ($frutas as $key => $value) {
	echo $key.' ';
	print_r($value);
	echo "<br>";
	echo($value['color']);
	echo "<br>";
	echo($value['sabor']);
	echo "<br>";
}
echo "<br><br>";

//Ejemplo 2
foreach ($frutas as $key => $value) {
	echo $key.' ';
	foreach ($value as $key => $value) {
		echo $key.' ';
		echo $value;
	}
	echo '<br>';
}

//Cambiando el arreglo por una cadena
$frutas = 'hola';
print_r($frutas);

?>