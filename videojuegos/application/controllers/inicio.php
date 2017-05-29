<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Inicio extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('consola_model');

	}

	public function index()
	{

		//$this->load->view('login');
		$this->load->view('ejemplos/vista2');
	}

	public function vista2()
	{
		$this->load->view('vista2');
		
	}

	public function agregar()
	{
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('empresa', 'Empresa', 'required');
		if ($this->form_validation->run() == TRUE) {
			$array = array(
				'nombre' => $_POST['nombre'],
				'empresa' => $_POST['empresa']
				);

			$this->consola_model->add_consola($array);
		}
		 else {
		 	echo "NO ENVIASTE NI MADRES";
		}
		$this->load->view('ejemplos/agregar');

	}

	public function mostrarDatos()
	{
		$consolas = $this->consola_model->get_consolas();
		echo json_encode($consolas);

	}

	public function edit($id)
	{
		$id = $this->consola_model->get_consola($id);
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('empresa', 'Empresa', 'required');
		if ($this->form_validation->run() == FALSE) 
		{
			$array = array(
				'id' => $id['id'],
				'nombre' => $id['nombre'],
				'empresa' =>  $id['empresa']
				);

			$this->load->view('ejemplos/agregar', $array);
	    }
	    else{

	    	$id = $_POST['id'];

	    	$array = array(
	    		'nombre' => $_POST['nombre'],
	    		'empresa' => $_POST['empresa']
	    		);

	    	$this->consola_model->update_consola($id, $array);

	    	$this->load->view('ejemplos/agregar');
	    }
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */