<?php
class Admin_files extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
	const VIEW_FOLDER = 'admin/files';
 
    public function __construct()
    {
        parent::__construct();
            $this->load->model('files_model');
            $this->load->helper('download');
            $this->load->helper('directory');
		    $this->load->helper('url');
            $this->path = "assets" . DIRECTORY_SEPARATOR . "uploads"
			 . DIRECTORY_SEPARATOR. "files" . DIRECTORY_SEPARATOR;
            if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {
        //all the posts sent by the view
        $search_string = $this->input->post('search_string');
        $category = $this->input->post('category'); 
        $order_type = $this->input->post('order_type'); 

         
        

        //pagination settings
        $config['per_page'] = 20;
        $config['base_url'] = base_url().'index.php/admin/files';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 50;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $limit_end = ($page * $config['per_page']) - $config['per_page'];
        if ($limit_end < 0){
            $limit_end = 0;
        } 

        //if order type was changed
        if($order_type){
            $filter_session_data['order_type'] = $order_type;
        }
        else{
            //we have something stored in the session? 
            if($this->session->userdata('order_type')){
                $order_type = $this->session->userdata('order_type');    
            }else{
                //if we have nothing inside session, so it's the default "Asc"
                $order_type = 'ASC';    
            }
        }
        //make the data type var avaible to our view
        $data['order_type_selected'] = $order_type;        


        //we must avoid a page reload with the previous session data
        //if any filter post was sent, then it's the first time we load the content
        //in this case we clean the session filter data
        //if any filter post was sent but we are in some page, we must load the session data

        //filtered && || paginated
        if($search_string !== false && $category !== false || $this->uri->segment(3) == true){ 
           
            /*
            The comments here are the same for line 79 until 99

            if post is not null, we store it in session data array
            if is null, we use the session data already stored
            we save order into the the var to load the view with the param already selected       
            */

            if($search_string){
                $filter_session_data['search_string_selected'] = $search_string;
            }else{
                $search_string = $this->session->userdata('search_string_selected');
            }
            $data['search_string_selected'] = $search_string;

            if($category){
                $filter_session_data['category'] = $category;
            }
            else{
                $category = $this->session->userdata('category');
            }
            $data['category'] = $category;

            //save session data into the session
            if(isset($filter_session_data)){
              $this->session->set_userdata($filter_session_data);    
            }

            //fetch letters data into arrays
            $data['count_letters']= $this->files_model->count_files($search_string, $category);
            $config['total_rows'] = $data['count_files'];
            
           // $data['letters'] = $this->letter_model->get_letter($search_string, $letter_access_no, $category, $Arr_selected, $config['per_page'],$limit_end);

            
            
            //fetch sql data into arrays
            if($search_string){
                if($category){
                    $data['files'] = $this->files_model->get_file($search_string, $category, $order_type, $config['per_page'],$limit_end);        
                }else{
                    $data['files'] = $this->files_model->get_file($search_string, '', $order_type, $config['per_page'],$limit_end);           
                }
            }else{
                if($category){
                    $data['files'] = $this->files_model->get_file($search_string, $category, $order_type, $config['per_page'],$limit_end);        
                }else{
                    $data['files'] = $this->files_model->get_file('', '', $order_type,  $config['per_page'],$limit_end);        
                }
            }

        }else{

            //clean filter data inside section
            $filter_session_data['search_string_selected'] = null;
            $filter_session_data['category_selected'] = null;
            $filter_session_data['category'] = null;
            $filter_session_data['order_type'] = null;
            $this->session->set_userdata($filter_session_data);

            //pre selected options
            $data['search_string_selected'] = '';
            $data['category_selected'] = 0;
            $data['category'] = 'id';
            

            //fetch sql data into arrays
                   
            $data['count_files'] = $this->files_model->count_files($search_string,$category,$order_type, $config['per_page'],$limit_end);        
			$data['files'] = $this->files_model->get_file($search_string, $category, $order_type, '',$limit_end);        
        
            
            $config['total_rows'] = $data['count_files'];

        }//!isset($manufacture_id) && !isset($search_string) && !isset($order)

        //initializate the panination helper 
        $this->pagination->initialize($config);   

        //load the view
        $data['main_content'] = 'admin/files/list';
        $this->load->view('includes/template', $data);  

    }//index
    function do_upload()
	{
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|mp3|mp4';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
        
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
            
            echo 'Did not upload';

			//$this->load->view('admin/letters/add', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
            
            echo 'Successfully uploaded';
			//$this->load->view('upload_success', $data);
		}
	}
    public function add_form(){
        
        $data['category'] = $this->files_model->get_category($id);
        
        //load the view
       
        $data['main_content'] = 'admin/files/add';
        $this->load->view('includes/template', $data);  
        
    }
   public function download(){
        
        //download function  
        $id = $this->uri->segment(4);
        $fileparams = $this->letter_model->download_letter($id);
        foreach ($fileparams as $info){ 
	             $name = $info['main_subject'];
                 $url = $info['fileurl'];
              }
        $this->file =  $this->path. $url;
                
		force_download($url ,read_file($this->file));
        
        redirect('admin/files');
        
    }

    public function add()
     { 
        $data['pages'] = $this->files_model->get_page();
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            //form validation
           $this->form_validation->set_rules('file_name', 'File Name', 'required');
           $this->form_validation->set_rules('category', 'File Category', 'required');
           $this->form_validation->set_rules('description', 'File Description', 'required');
           
            
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            
            
            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
                
                $config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'pdf|png|jpg|mp3|avi';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
                $config['file_name']  = $this->input->post('file_name');

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
           
			$this->load->view('admin/files/sd', $error);
                        
		}
		else
		{
			$data = $this->upload->data();
                        
                        $data_to_store = array(
                            'file_name' => $this->input->post('file_name'),
                            'category' => $this->input->post('category'),
                            'description' => $this->input->post('description'),
                            
                            'url'=>$data['file_path']
                         );
                        
                        $this->files_model->store_file($data_to_store);
                      
                         echo 'Successfully uploaded';
                         
                         redirect('admin/files');
			//$this->load->view('upload_success', $data);
                }
            }

          }
        
        //load the view
       
        $data['main_content'] = 'admin/files/add';
        $this->load->view('includes/template', $data);  
         
     }
    /**
    * Update item by his id
    * @return void
    */
    public function update()
    {
        $data['files'] = $this->files_model->get_file();
        //$data['category'] = $this->letter_model->get_category();
        //product id 
        $id = $this->uri->segment(4);
  
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            //form validation
           $this->form_validation->set_rules('file_name', 'File Name', 'required');
           $this->form_validation->set_rules('category', 'File Category', 'required');
           $this->form_validation->set_rules('description', 'File Description', 'required');
           $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
         //if the form has passed through the validation
            if ($this->form_validation->run())
            {
    
                $data_to_store = array(
                            'file_name' => $this->input->post('file_name'),
                            'category' => $this->input->post('category'),
                            'description' => $this->input->post('description'),
                            'page_name'=>$this->input->post('page_name'),
                            'url'=>$data['file_path']
                         );
                //if the insert has returned true then we show the flash message
                if($this->files_model->update_file($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/files/update/'.$id.'');

            }//validation run

        }

        //if we are updating, and the data did not pass trough the validation
        //the code below wel reload the current data

        //product data 
        $data['files'] = $this->files_model->get_file_by_id($id);
        //load the view
        $data['main_content'] = 'admin/files/edit';
        $this->load->view('includes/template', $data);            

    }//update

    /**
    * Delete product by his id
    * @return void
    */
    public function delete()
    {
        //product id 
        $id = $this->uri->segment(4);
        $this->files_model->delete_file($id);
        redirect('admin/files');
    }//edit
 function delete_multiple()
   {
        //validation rules
          $checked_files = $this->input->post('check'); //selected files
          $this->files_model->delete_checked($checked_files);
   }

}