<?php
	class Tipo_model extends CI_Model
	{

		function __construct()
		{
			$this->load->database();
		}

		public function get_tipos()
		{
			$query = $this->db->query("select id, nombre from consola");
			return $query->result_array();
		}

		public function get_tipo($id)
		{

			$this->db->select('id, nombre');
			$this->db->from('tipo');
			$this->db->where('id', $id);
			$this->db->limit(1);
			$query = $this->db->get();

			if (count($query->result_array()) > 0) {
				return $query->result_array()[0];
			}

		}


		public function add_tipo($data)
		{
			$this->db->insert('tipo', $data);
			$flag = ($this->db->affected_rows() > 0) ? true : false ;
			return $flag;
		}

		public function update_tipo($id, $data) {
			$this->db->where('id', $id);
			$this->db->update('tipo', $data);

			$flag = ($this->db->affected_rows() > 0) ? true : false ;
			return $flag;
		}

		public function delete_tipo($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('tipo');

			$flag = ($this->db->affected_rows() > 0) ? true : false ;
			return $flag;
		}

		
	}
?>