<?php
class Admin_messages extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('messages_model');
        

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    }
    public function index(){
     $data['messages'] = $this->messages_model->get_all();
        $this->load->view('admin/messages', $data);     
    }
}