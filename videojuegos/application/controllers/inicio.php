<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Inicio extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		//$this->load->library('form_validation');
		//$this->load->model('consola_model');

	}

	public function index()
	{

		$this->load->view('login');
	}

	public function vista2()
	{
		$this->load->view('vista2');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */