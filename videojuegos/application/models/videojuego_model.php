<?php
	class Videojuego_model extends CI_Model
	{

		function __construct()
		{
			$this->load->database();
		}

		public function get_videojuegos()
		{
			$this->db->select('videojuego.id, titulo, descripcion, clasificacion, nombre, imagen, precio');
			$this->db->from('videojuego');
			$this->db->join('tipo', 'id_tipo= tipo.id');
			$query = $this->db->get();

			$videojuegos = $query->result_array();
			$vdjs = $query->result();

			/*
			print_r($videojuegos[0]);
			echo "<br><br><br>";
			print_r($vdjs[0]);

			echo "<br><br><br>";
			echo $vdjs[0]->titulo;
			*/

			return $videojuegos;

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