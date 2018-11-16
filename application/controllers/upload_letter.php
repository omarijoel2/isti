<?php

/**
 * @author aaron
 * @copyright 2013
 */

class Upload_letter extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function upload_file()
	{
		$config['upload_path'] = './assets/uploads/letters/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
		    $info = $this->upload->data();
            
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_letter_success', $data);
            
            $this->url = $info['file_name'];
		}
        
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            //form validation
           $this->form_validation->set_rules('letter_access_no', 'Letter Access No', 'required');
           $this->form_validation->set_rules('volume_no', 'volume number', 'required');
           $this->form_validation->set_rules('folio_no', 'Folio number', 'required');
           $this->form_validation->set_rules('main_subject', 'main subject', 'required');
           $this->form_validation->set_rules('sender', 'sender', 'required');
           $this->form_validation->set_rules('personal_no', 'Personal Number', '');
           $this->form_validation->set_rules('recepient', 'Recepient', '');
           $this->form_validation->set_rules('organisation', 'organisation', '');
           $this->form_validation->set_rules('position', 'position', '');
           $this->form_validation->set_rules('category', 'category', 'required');
           $this->form_validation->set_rules('password', 'password','');
           $this->form_validation->set_rules('confirm_password', 'confirm_password', '');
           $this->form_validation->set_rules('date_send', 'date_send', 'required');
           $this->form_validation->set_rules('date_received', 'date_received', '');
           $this->form_validation->set_rules('action_taken', 'Action Taken', 'required');
            
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">�</a><strong>', '</strong></div>');
            
            
            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
                $data_to_store = array(
                    'letter_access_no' => $this->input->post('letter_access_no'),
                    'volume_no' => $this->input->post('volume_no'),
                    'folio_no' => $this->input->post('folio_no'),
                    'main_subject' => $this->input->post('main_subject'),
                    'sender' => $this->input->post('sender'),
                    'personal_no' => $this->input->post('personal_no'),
                    'recepient' => $this->input->post('recepient'),
                    'organisation' => $this->input->post('organisation'),
                    'position' => $this->input->post('position'),
                    'category' => $this->input->post('category'),
                    'password' => $this->input->post('password'),          
                    'confirm_password' => $this->input->post('confirm_password'),
                    'date_send' => $this->input->post('date_send'),
                    'date_received' => $this->input->post('date_received'),
                    'action_taken' => $this->input->post('action_taken'),
                    'fileurl'=> $this->url
                 );
                 
           		if($this->letter_model->store_letter($data_to_store)){
                    $data['flash_message'] = TRUE; 
                }else{
                    $data['flash_message'] = FALSE; 
                }
                
            }
            
          //if the insert has returned true then we show the flash message
                
        
        }
        
    } //end function
     
  }

?>