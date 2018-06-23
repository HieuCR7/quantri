
<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class My_model extends CI_Model
	{
		
		/**
		* 
		*/
		function create($data = array())
		{
			if($this->db->insert($this->table, $data))
				return TRUE;
			else
				return FALSE;
		}

		function get_list($input = array())
		{
			$query = $this->db->get($this->table);
			return $query->result_array();
		}
		function update($id, $data)
		{
			if(!$id){
				return FALSE;
			}
			$this->db->where('id', $id);
			$this->db->update($this->table, $data);
			return TRUE;
		}
		function delete($id)
		{
			if(!$id)
			{
				return FALSE;
			}
			if(is_numeric($id))
			{
				$this->db->where('id', $id);
				$this->db->delete($this->table);
			}
		}
		public function findById($id) 
		{

			$this->db->where('id', $id);
			$query = $this->db->get($this->table);
			return $query->row();
		}

		/**
		* Get data by field
		*@param $field
		*@param $value
		*@param $id
		*@return mixed
		*/
		public function getByField($field, $value, $id='')
		{
			$this->db->select('*')
					->from($this->table)
					->where($field, $value);
			if (!empty($id)) {
				$this->db->where('id != '.$id);
			}
			$query =$this->db->get();
			return $query->result_array();
		}

	}
?>