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
				//return $query->result_array()[0]['nombre'];
				return $query->result_array()[0];
			}

		}


		public function add_consola($data)
		{
			$this->db->insert('consola', $data);
		}

		public function update_consola($id, $data) {
			$this->db->where('id', $id);
			$this->db->update('consola', $data);
		}

		public function delete_consola($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('consola');
		}

		public function delete_consolas($ids)
		{
			foreach ($ids as $id) {
				$this->db->where('id', $id);
				$this->db->delete('consola');
			}
		}

		
		
	}
?>