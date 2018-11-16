<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	 public function __construct() {
     parent::__construct();
     $this->load->helper('url');
     $this->load->model('articles_model');
 }
	public function buyer_behavior()
	{
            //$data['behavior']=$this->model->articles_model->get_article_by_id();
		$this->load->view('buyer_behavior');
	}
        public function consultative_selling()
                
	{   
            //$consult =$this->articles_model->get_article_by_id($id);
	    $this->load->view('frontend/consultative');
	}
        public function supervision()
                
	{   
            //$consult =$this->articles_model->get_article_by_id($id);
	    $this->load->view('frontend/supervision');
	}
        public function cross_selling()
                
	{   
            //$consult =$this->articles_model->get_article_by_id($id);
	    $this->load->view('frontend/cross_selling');
	}
        public function negotiation()
	{   
           // $data['consult']=$this->model->articles_model->get_article_by_id();
		$this->load->view('frontend/negotiation');
	}
        public function salesprocess_skills()
	{   
           // $data['consult']=$this->model->articles_model->get_article_by_id();
		$this->load->view('frontend/salesprocess');
	}
        public function time_management(){
            $this->load->view('frontend/time_management');
        }
        public function communication_style(){
            $this->load->view('frontend/communication_style');
        }
         public function customer_satisfaction(){
            $this->load->view('frontend/customer_satisfaction');
        }
        public function business_etiquette(){
            $this->load->view('frontend/business_etiquette');
        }
        public function presentation_skills(){
            $this->load->view('frontend/presentation_skills');
        }
         public function change_management(){
            $this->load->view('frontend/change_management');
        }
         public function leadership()
	{   
           // $data['consult']=$this->model->articles_model->get_article_by_id();
		$this->load->view('frontend/leadership');
	}
       public function functional_teams(){
           $this->load->view('frontend/functional_teams');
       }
       public function motivating_sales(){
           $this->load->view('frontend/motivating_sales');
       }
}