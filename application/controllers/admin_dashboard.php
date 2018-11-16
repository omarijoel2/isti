<?php
class Admin_dashboard extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        //$this->load->model('products_model');
       // $this->load->model('manufacturers_model');

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }
 public function index(){
     $this->load->model('users_model');
    $data['userdata'] = $this->session->all_userdata();
 $this->load->view('admin/dashboard',$data);
 
 }
 }