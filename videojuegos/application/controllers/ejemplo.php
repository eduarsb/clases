<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Ejemplo extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		//$this->load->library('form_validation');
		$this->load->model('consola_model');

	}

	public function index()
	{
		
		//$consolas = $this->consola_model->get_consolas();
		$consolas = $this->consola_model->get_consola(3);
		//$consolas = $this->consola_model->get_consola(3)[0];
		print_r($consolas);
		echo "<br>";

		//print_r($consolas[0]);
		//echo "<br>";


		//$ejemplo = $consolas[0];
		//echo $ejemplo['nombre'];

		//$consolas = $consolas[0];
		echo $consolas;
		//echo $consolas['nombre'];

		//$this->load->view('welcome_message');
	}

	public function argumento_requerido($arg)
	{
		echo "Ejemplo de una funcion con argumento requerido <br>";
		echo $arg;

	}

	public function argumento_default($arg = 'default')
	{
		echo "Ejemplo de una funcion con argumento que puede ser omitido <br>";
		echo "Si es omitido toma el valor por defecto que se declara en la funcion ('default') <br>";
		echo "Si es no es omitido toma el valor con el que se envia <br>";
		echo $arg;

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */