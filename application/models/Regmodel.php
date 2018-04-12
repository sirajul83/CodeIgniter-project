<?php
	class Regmodel extends CI_Model{
		public function data_insert($data){ 
			$this->db->insert('registration',$data);

		}
	}
?>