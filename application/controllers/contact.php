<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
 protected 	$sendEmailTo 		= 	'info@istiglobal.com';
 
 /*'bensondcr@gmail.com'; change this!*/
	
	 function __construct()
    {
       parent::__construct();
      	  $this->load->library('email');
	  $this->load->helper('url');
          $this->load->helper('form');
	  $this->load->library('form_validation');
	   //$this->load->model('blogmodel');
    }
	public function index()
	{
		$this->load->view('nova/contact');
	}
       /* public function send_mail() {
            
        	$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->to($this->sendEmailTo);
		$this->email->subject($this->input->post('subjectLine'));
		$this->email->message($this->input->post('message'));
                        
                        
                            $this->form_validation->set_rules('name', 'Your name', 'trim|required');
                            $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
                            $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
                            
                            if($this->form_validation->run() == FALSE) {
			// show the form
			$this->load->view('contact');

		} else {
			// success! email it, assume it sent, then show contact success view.
			if ($this->send_mail()) {
				echo "email sent successfully";
			}
			
                                    return $this->email->send();


	}
}**/

	public function sendmail() {
            
        		
        		$this->form_validation->set_rules('name', 'Your name', 'trim|required');
                        $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
                        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
        		
        		$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to($this->sendEmailTo);
			$this->email->subject($this->input->post('subjectLine'));
			$this->email->message($this->input->post('message'));
			                    
                        if($this->form_validation->run() == FALSE) {
			// show the form
				$this->load->view('frontend/contact');

			} else {
				$this->email->send();
				print('Email Send Successfully');
				
			}
			
                                   


	}
}
?>