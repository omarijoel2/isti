<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tips extends CI_Controller {
 public function __construct() {
     parent::__construct();
     $this->load->model('articles_model');
 }
	
	public function index()
	{ 
            $data['articles'] = $this->articles_model->get_article();
            //$data['tips']=$this->articles_model->get_article_by_id($id);
		$this->load->view('tips',$data);
	}
}
