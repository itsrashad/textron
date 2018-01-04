<?php
/**
* 
*/
class Ajax_model extends CI_Model
{
	/*
	* Ajax Model
	* For CRUD in json
	* @Ahsan Zahid Chowdhury
	* @azc.pavel@gmail.com
	* @+880 1677 533818
	* @2014-06-13
	* Access Public
	*/
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_query_row($table,$where = '1')
	{
		if($where != '1')
			$query = $this->db->get_where($table,$where);
		else
			$query = $this->db->get($table);
		
		if($query->num_rows() > 0)
			return $query->row_array();

		return 0;
	}

	function get_query_result($table,$where = '1')
	{
		if($where != '1')
			$query = $this->db->get_where($table,$where);
		else
			$query = $this->db->get($table);
		
		if($query->num_rows() > 0)
			return $query->result_array();

		return 0;
	}

	function insert_query($table, $insert_data)
	{
		$this->db->insert($table, $insert_data);
	}

	function update_query($table, $where, $update_data)
	{
		$this->db->where($where)->update($table, $update_data);
	}

	function delete_query($table, $where)
	{
		$this->db->delete($table, $where);
	}

}

?>