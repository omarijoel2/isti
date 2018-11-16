<?php
class Files_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }
    public function get_file_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('files');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }
    function count_files($search_string,$category,$order_type,$limit_end){
        
        
    }
    public function get_file()
    {
		$this->db->select('*');
		$this->db->from('files');
		
		$query = $this->db->get();
		return $query->result_array(); 
    }
    function get_category()
    {
       $this->db->select('category');
	   $this->db->from('files'); 
       $query = $this->db->get();
       return $query->result_array(); 
    }
    function get_page()
    {
       $this->db->select('*');
	   $this->db->from('pages'); 
       $query = $this->db->get();
       return $query->result_array(); 
    }
    function store_file($data)
    {
		$insert = $this->db->insert('files', $data);
	    return $insert;
	}
     function delete_checked($checked_files) 
        {
            $this->db
                ->where_in('id', $checked_files)
                ->delete('files');
            return $this->db->affected_rows() > 0;
        }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

