<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

 

	
	 function __construct()
    {
       parent::__construct();
      	  
	  $this->load->helper('url');
          $this->load->helper('form');
	  $this->load->library('form_validation');
	   $this->load->model('messages_model');
    }
	public function index()
	{
		$this->load->view('nova/register');
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

	public function messages(){
            if ($this->input->server('REQUEST_METHOD') === 'POST')
      
        {

            //form validation
           $this->form_validation->set_rules('name', 'First Name', 'required');
           $this->form_validation->set_rules('surname', 'Sur Name', 'required');
           $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
          
           
            
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            
            
            //if the form has passed through the validation
            
                    if ($this->form_validation->run()) {   
                        $data_to_store = array(
                            'name' => $this->input->post('name'),
                            'surname' => $this->input->post('surname'),
                            'email' => $this->input->post('email'),
                           
                            'subjectline'=>$this->input->post('subjectline'),
                            
                           
                            'cell' => $this->input->post('cell'),
                            'company' => $this->input->post('company')
                            
                         );
                        
                       
 
           
       
       if( $this->messages_model->store_message($data_to_store)){
           echo "registration succesful" ;
                }else{
                    echo "go back and change a few things and try again";
                    $this->load->view('nova/register');
                }
                    }
        
}} }
?>