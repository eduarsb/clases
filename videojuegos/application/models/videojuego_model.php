<?php
	class Videojuego_model extends CI_Model
	{

		function __construct()
		{
			$this->load->database();
		}

		public function get_videojuegos()
		{
			$this->db->select('id, titulo, descripcion, clasificacion, nombre, imagen, precio');
			$this->db->from('videojuego');
			$this->db->join('tipo', 'id_tipo= id', 'left');
			$query = $this->db->get();
		}

		public function get_videojuego($id)
		{
			$this->db->select('id, titulo, descripcion, clasificacion, nombre, imagen, precio');
			$this->db->from('videojuego');
			$this->db->join('tipo', 'id_tipo= id', 'left');
			$this->db->where('id', $id);
			$this->db->limit(1);

			if (count($query->result_array()) > 0) {
				return $query->result_array()[0]['nombre'];
			}

		}


		public function add_videojuego($data)
		{
			$this->db->insert('videojuego', $data);
		}

		public function update_videojuego($id, $data) {
			$this->db->where('id', $id);
			$this->db->update('videojuego', $data);
		}

		public function delete_videojuego($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('videojuego');
		}

		public function delete_videojuegos($ids)
		{
			foreach ($ids as $id) {
				$this->db->where('id', $id);
				$this->db->delete('videojuego');
			}
		}
		
	}
?>