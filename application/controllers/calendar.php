<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {
public function __construct() {
     parent::__construct();
     $this->load->model('events_model');
 }
	public function index()
	{$data['events']=$this->events_model->getEvent();
		
		$this->load->view('frontend/events',$data);
	}
        function loadEvents(){
        
        $results = $this->events_model->getEvent();
        $this->output->set_header('Content-type: application/json; charset = utf-8');
        echo json_encode($results);
        
        
    }
}
