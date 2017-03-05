<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Learn_more_controller extends CI_Controller
{
		public function __construct() 
	    { 
	            parent::__construct();
	            $this->load->helper('url'); 
	            $this->load->library('session');
	            //$this->load->library('api');
	            $this->load->database();
	            
	    }

    	

		public function learn_more_editor()
		{
			if(isset($_SESSION['logged_in'])==TRUE)
			{
			$new_about_us		=	htmlentities($this->input->post('new_about_us'));
			$new_mission		=	htmlentities($this->input->post('new_mission'));
			$new_vision 		=	htmlentities($this->input->post('new_vision'));
			$new_location		=	htmlentities($this->input->post('new_location'));
			$this->load->model("Admin/Learn_more_model");
			$result = $this->Learn_more_model->learn_more_editor($new_about_us,$new_mission,$new_vision,$new_location);
			}
		}
		
	
}
?>