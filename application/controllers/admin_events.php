<?php
class Admin_events extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('events_model');
        //$this->load->library('calendar');
        $this->load->helper('url');
        $this->load->helper('date');
        

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
     function _date($time )
 	{ $this->load->model('mcalendar');
	 	
		$today = date("Y/n/j", time());
		$data['today']= $today;
		$current_month = date("n", $time);
		$data['current_month'] = $current_month;
		$current_year = date("Y", $time);
		$data['current_year'] = $current_year;
		$current_month_text = date("F Y", $time);
		$data['current_month_text'] = $current_month_text;
		$total_days_of_current_month = date("t", $time);
		$data['total_days_of_current_month']= $total_days_of_current_month;
		$first_day_of_month = mktime(0,0,0,$current_month,1,$current_year);
		$data['first_day_of_month'] = $first_day_of_month;
		//geting Numeric representation of the day of the week for first day of the month. 0 (for Sunday) through 6 (for Saturday).
		$first_w_of_month = date("w", $first_day_of_month);
		$data['first_w_of_month'] = $first_w_of_month;
		//how many rows will be in the calendar to show the dates
		$total_rows = ceil(($total_days_of_current_month + $first_w_of_month)/7);
		$data['total_rows']= $total_rows;
		//trick to show empty cell in the first row if the month doesn't start from Sunday
		$day = -$first_w_of_month;
		$data['day']= $day;
		$next_month = mktime(0,0,0,$current_month+1,1,$current_year);
		$data['next_month']= $next_month;
		$next_month_text = date("F \'y", $next_month);
		$data['next_month_text']= $next_month_text;
		$previous_month = mktime(0,0,0,$current_month-1,1,$current_year);
		$data['previous_month']= $previous_month;
		$previous_month_text = date("F \'y", $previous_month);
		$data['previous_month_text']= $previous_month_text;
		$next_year = mktime(0,0,0,$current_month,1,$current_year+1);
		$data['next_year']= $next_year;
		$next_year_text = date("F \'y", $next_year);
		$data['next_year_text']= $next_year_text;
		$previous_year = mktime(0,0,0,$current_month,1,$current_year-1);
		$data['previous_year']=$previous_year;
		$previous_year_text = date("F \'y", $previous_year);
		$data['previous_year_text']= $previous_year_text;
		return $data;
 	}
    public function index()
    {
         //load the view
        $data['main_content'] = 'admin/calendar';
        $data['events']=$this->events_model->getEvent();
        //$this->load->view('includes/template', $data);  
        $this->load->view('admin/calendar',$data);

    }//index
    
    function loadEvents(){
        
        $results = $this->events_model->getEvent();
        $this->output->set_header('Content-type: application/json; charset = utf-8');
        echo json_encode($results);
        
        
    }

   
    function add()
    { 
         //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            //form validation
            
            $this->form_validation->set_rules('title', 'Event Title', 'required');
            $this->form_validation->set_rules('start', 'Start Event Date', 'required ');
            $this->form_validation->set_rules('end', 'End Event Date', '');
            $this->form_validation->set_rules('event_description','Event Description', '');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            
            
            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
                $data_to_store = array(
                    'title' => $this->input->post('title'),
                    'start' => $this->input->post('start'),
                    'end' => $this->input->post('end'),
                    'event_description' => $this->input->post('event_description')
                    );
                
             //if the insert has returned true then we show the flash message
                if($this->events_model->store_event($data_to_store) ){
                    $data['flash_message'] = TRUE;
                    redirect('admin/events');
                }else{
                    $data['flash_message'] = FALSE; 
                }
             }

        }
         //load the view
       
        $data['main_content'] = 'admin/events/add';
        $this->load->view('includes/template', $data);  
    }       

    /**
    * Update item by his id
    * @return void
    */
    public function update()
    {$data['title'] = "Edit Events";
		if(isset($_POST['submit']))
		{
			//check for empty inputs
			if((isset($_POST['date']) && !empty($_POST['date'])) && (isset($_POST['eventTitle']) && !empty($_POST['eventTitle'])) && (isset($_POST['eventContent']) && !empty($_POST['eventContent'])))
			{
			      //add new event to the database
			      $this->MCalendar->updateEvent();
			      //$this->session->set_flashdata('message','Event created!');
			      flashMsg('success','Event updated');
			      redirect('admin/events/index','refresh');
			}
			else
			{
			      //alert message for empty input
			      $data['alert'] = "No empty input please";
			}
		}
                
        //product id 
        
                $data['event']= $this->MCalendar->getEventsById($id);
        //if save button was clicked, get the data sent via post
       
        //if we are updating, and the data did not pass trough the validation
        //the code below wel reload the current data
                
       
        $data['main_content'] = 'admin/events/edit';
        $this->load->view('includes/template', $data);            

    }//update

    /**
    * Delete product by his id
    * @return void
    */
    public function delete()
    {
       $this->MCalendar->deleteEvent($id);
		$this->session->set_flashdata('message', 'Event deleted successfully.');
        flashMsg('success','Event deleted successfully.');
		redirect('admin/events/index');
    }//edit
       
}