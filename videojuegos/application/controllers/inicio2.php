<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Inicio2 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('consola_model');
		$this->load->model('videojuego_model');

		$this->load->library('form_validation');


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

	public function agregar(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('empresa', 'NombreCampo', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'nombre' => $this->input->post('nombre'),
				'empresa' => $this->input->post('empresa')
				);
			$this->consola_model->add_consola($data);
			$this->load->view('ejemplos2/inicio');

		}else{
			echo "no se agrego";
			$this->load->view('ejemplos2/agregar');
		}
		
	}

	public function agregar_ajax()
	{
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('empresa', 'NombreCampo', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'nombre' => $this->input->post('nombre'),
				'empresa' => $this->input->post('empresa')
				);
			$this->consola_model->add_consola($data);
			echo true;

		}else{
			echo false;
		}
	}

	public function editar($id)
	{
		
		

		$data = array(
				'nombre' => $this->input->post('nombre'),
				'empresa' => $this->input->post('empresa')
				);
		print_r($data);
		if (!empty($this->input->post('nombre')) && !empty($this->input->post('empresa'))) { 
			$this->consola_model->update_consola($id, $data);
		}else{
			print_r("Error!!!");
		}

		$resultado =$this->consola_model->get_consola($id);

		print_r($resultado);
		$this->load->view('ejemplos2/agregar',$resultado);
		
	}

	public function ejemplo()
	{
		$this->load->view('ejemplos2/vista');
		
	}

	public function get_videojuegos_json()
	{
		echo json_encode($this->videojuego_model->get_videojuegos());
	}

	public function recibir()
	{

		print_r($_POST['nombre']);
	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */