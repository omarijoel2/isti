<?php
class Messages_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
   

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_all()
    {
		$this->db->select('*');
		$this->db->from('messages');
		
		$query = $this->db->get();
		return $query->result_array(); 
    }    

    /**
    * Fetch manufacturers data from the database
    * possibility to mix search, filter and order
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
   
  
    function store_message($data_to_store)
    {
		$insert = $this->db->insert('messages', $data_to_store);
	    return $insert;
	}

   
	function delete_message($id){
		$this->db->where('id', $id);
		$this->db->delete('messages'); 
	}
 
}
?>	
