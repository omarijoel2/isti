<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events_model extends CI_Model {
     public function __construct() {
         parent::__construct();
        $this->load->database();
     }
     
     function getEvent(){
        $this->db->select('*');
		$this->db->from('events');
		$query = $this->db->get();
		return $query->result_array();  
     }
     function store_event($data)
    {
	    $insert = $this->db->insert('events', $data);
	    return $insert;
	}
        function update_event($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('events', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}
        function delete_event($id){
		$this->db->where('id', $id);
		$this->db->delete('events'); 
	}
 
}