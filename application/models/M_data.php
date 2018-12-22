<?php
	/**
	* 
	*/
	class M_data extends CI_Model{
		function get_data($table){
			return $this->db->get($table);
		}

		function add_data($table, $data){
			$this->db->insert($table, $data);
		}

		function get_where($table, $where){
			$query = $this->db->get_Where($table, $where);
			return $query->result();
		}

 		function update_data($table, $where, $data){
			$this->db->where($where);
			$this->db->update($table, $data);
		}

		function delete_data($table, $where){
			$this->db->where($where);
			$this->db->delete($table);
		}

		function login($table, $where){
			$query = $this->db->get_Where($table, $where);
			return $query->num_rows();
		}

		function get_data_sort($table, $field){
			$this->db->order_by($field, 'DESC');
			$this->db->limit(5);
			$query = $this->db->get($table);
    		return $query->result();
		}

		function get_data_image($table, $field){
			$this->db->order_by($field, 'DESC');
			$this->db->limit(5);
			$query = $this->db->get($table);
    		return $query->result();
		}

		function update_dilihat($where){
			$d = $this->db->get_Where('artikel', $where)->result();
			$dd = $d[0]->dilihat;
			$ddd = ($dd+1);
			$datai = array('dilihat' => $ddd);
			$this->db->where($where);
			$this->db->update('artikel', $datai);
		}
		
		function get_data_artikel($table){
		    $this->db->order_by('id_artikel','DESC');
			return $this->db->get($table);
		}
	}
?>