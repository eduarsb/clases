<?php

$data['consolas'] = array(
	array(
		'nombre' => 'Playstation 4',
		'precio' => 7000,
		'videojuegos' => array(
			'shooters' => array('call of duty', 'battlefield', 'nova'),
			'indies' => array('brain', 'limbo'),
			'plataforms' => array('crash','tomb raider', 'uncharted','batman', 'god of war'),
			'rpg' => array('final fantasy', 'fallout', 'the witcher III', 'bloodborne'),
		),
		'empresa' => 'Sony'
	),
	array(
		'nombre' => 'Xbox one',
		'precio' => 6000,
		array(
			'shooters' => array('halo', 'gears of war', 'call of duty'),
			'plataforms' => array('quantum break','tomb raider'),
			'rpg' => array('diablo III', 'gta V', 'dragon inquisition'),
		),
		'empresa' => 'Microsoft'
	),
	array(
		'nombre' => 'Nintendo switch',
		'precio' => 10000,
		'empresa' => 'Nintendo',
		'videojuegos' => array('Mario Bros', 'The legend of zelda', 'Metroid', 'Mario kart', 'Smash bros', 'Pokemon')
	)
);

$data['moviles'] = array(
	'android' => array('pokemon go', 'flow', 'flappy bird'),
	'ios' => array('mario run', 'monsters fo sea', 'jet pack', ' x juego')
);


print_r($data);


echo "<br><br>";
echo "Con base en el arreglo anterior obtner lo siguiente: <br>";

echo "Mostrar la empresa 'Sony' <br>";
echo $data['consolas'][0]['empresa'];

echo "Mostrar el precio de la Xbox one <br>";
echo $data['consolas'][1]['precio'];

echo "Mostrar la consola 'Nintendo switch' <br>";
echo $data['consolas'][2]['nombre'];

echo "Mostrar el videojuego de 'uncharted' <br>";
echo $data['consolas'][0]['videojuegos']['plataforms'][2];

echo "Mostrar el videojuego de 'gears of war' <br>";
echo "Mostrar el videojuego de 'Mario kart' <br>";
echo "Mostrar el videojuego de 'flappy bird";
echo "Mostrar el videojuego de 'mario run";


echo "Listar el nombre de las consolas";
foreach ($data['consolas'] as $value) {
	print_r($value['nombre']);
	echo "<br>";

}


echo "Listar los de juegos de plataforms de Playstation 4 <br>";
foreach ($data['consolas'][0]['videojuegos']['plataforms'] as $value) {
	print_r($value);
	echo "<br>";

}


echo "Listar los de juegos de shooters de Xbox one <br>";
echo "Listar los de juegos de Nintendo switch <br>";


echo "Listar todos los juegos moviles, tanto los de android como los de ios <br>";
//Forma 1
foreach ($data['moviles'] as $value) {
	//print_r($value);
	foreach ($value as $videojuego) {
		echo $i. " videojuego :";
		print_r($videojuego);
		echo "<br>";
		$i++;
	}
}

//Forma 2
for ($j=0; $j < count($data['moviles']['android']); $j++) { 
	echo $data['moviles']['android'][$j];
	echo '<br><br>';
}

for ($j=0; $j < count($data['moviles']['ios']); $j++) { 
	echo $data['moviles']['ios'][$j];
	echo '<br><br>';
}



echo "Listar todos los juegos de Playstation 4 (usando maximo solo 2 foreach) <br>";
foreach ($data['consolas'][0]['videojuegos'] as $value) {
	foreach ($value as $val) {
		print_r($val);
		echo "<br>";
	}
}


echo "Mostrar el precio total de las consolas <br>";
//Froma 1
$total = $data['consolas'][0]['precio'] + $data['consolas'][1]['precio'] + $data['consolas'][2]['precio'];
echo $total;


//Forma 2
$total = 0;
foreach ($data['consolas'] as $value) {
	$total = $value['precio'] + $total;
	echo "<br><br>";
}
echo $total;

?>