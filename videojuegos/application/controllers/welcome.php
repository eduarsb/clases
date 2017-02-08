<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Welcome extends CI_Controller {
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */