<?php
	class Consola_model extends CI_Model
	{

		function __construct()
		{
			$this->load->database();
		}

		public function get_consolas()
		{
			$query = $this->db->query("select id, nombre, empresa from consola");
			return $query->result_array();
		}

		public function get_consola($id)
		{
			$query = $this->db->query("select id, nombre, empresa from consola where id =".$id);
			$resultado = $query->result_array();
			/*
			if (count($resultado) > 0) {
				return $resultado[0]['nombre'];
			}
			*/
			//return $query->result_array()[0]['nombre'];

			if (count($query->result_array()) > 0) {
				return $query->result_array()[0]['nombre'];
			}

		}

		/*
		public function get_extensiones_publicas()
		{
			$this->db->select("CONCAT(extension, ' : ', descripcion) as extension", false);
			$query = $this->db->get('dir_extensiones');

			return $query->result_array();
		}

		public function get_extension($id)
		{
			//$query = $this->db->query("SELECT extension, descripcion, id_piso FROM dir_extensiones WHERE id=$id");
			$this->db->select('extension, descripcion, id_piso, jefe, secretarias');
			$this->db->where('id', $id);
			$query = $this->db->get('dir_extensiones');

			return $query->result_array();
		}


		public function add_extension($data)
		{
			$this->db->insert('dir_extensiones', $data);
		}

		public function update_extension($id, $data) {
			$this->db->where('id', $id);
			$this->db->update('dir_extensiones', $data);
		}

		public function delete_extensiones($ids)
		{
			foreach ($ids as $id) {
				$this->db->where('id', $id);
				$this->db->delete('dir_extensiones');
			}
		}
		*/
	}
?>