<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Inicio2 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('consola_model');
		$this->load->model('videojuego_model');

	}

	public function index()
	{

		$data = array(
			'videojuego' => $this->videojuego_model->get_videojuegos()
 		);

 		$data['consolas']= $this->consola_model->get_consolas();
		$data['nombre'] = 'Esto es nombre';
		
		//print_r($data);
		$this->load->view('ejemplos2/inicio', $data);

	}

	public function ejemplo()
	{
		$this->load->view('ejemplos2/vista');
		
	}

	public function get_videojuegos_json()
	{
		echo json_encode($this->videojuego_model->get_videojuegos());
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */