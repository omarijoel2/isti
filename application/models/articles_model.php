<?php
class Articles_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_article_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('articles');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }
     public function get_article()
    {
		$this->db->select('*');
		$this->db->from('articles');
		//$this->db->where( 'page_id',3);
               
		$query = $this->db->get();
		return $query->result_array(); 
    }

    /**
    * Fetch products data from the database
    * possibility to mix search, filter and order
    * @param int $manufacuture_id 
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_articles($page_id=null, $search_string=null, $order=null, $order_type='Asc', $limit_start, $limit_end)
    {
	    
		$this->db->select('articles.id');
		$this->db->select('articles.title');
		$this->db->select('articles.content');
		$this->db->select('articles.created_at');
		
		$this->db->select('articles.page_id');
		$this->db->select('pages.name as page_name');
		$this->db->from('articles');
		if($page_id != null && $page_id != 0){
			$this->db->where('page_id', $page_id);
		}
		if($search_string){
			$this->db->like('title', $search_string);
		}

		$this->db->join('pages', 'articles.page_id = pages.id', 'left');

		$this->db->group_by('articles.id');

		if($order){
			$this->db->order_by($order, $order_type);
		}else{
		    $this->db->order_by('id', $order_type);
		}


		$this->db->limit($limit_start, $limit_end);
		//$this->db->limit('4', '4');


		$query = $this->db->get();
		
		return $query->result_array(); 	
    }

    /**
    * Count the number of rows
    * @param int $manufacture_id
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_articles($page_id=null, $search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('articles');
		if($page_id != null && $page_id != 0){
			$this->db->where('page_id', $page_id);
		}
		if($search_string){
			$this->db->like('title', $search_string);
		}
		if($order){
			$this->db->order_by($order, 'Asc');
		}else{
		    $this->db->order_by('id', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();        
    }

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function store_article($data)
    {
		$insert = $this->db->insert('articles', $data);
	    return $insert;
	}

    /**
    * Update product
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_article($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('articles', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}

    /**
    * Delete product
    * @param int $id - product id
    * @return boolean
    */
	function delete_article($id){
		$this->db->where('id', $id);
		$this->db->delete('articles'); 
	}
 
}
?>	
