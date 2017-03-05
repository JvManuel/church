<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_maintenance_controller extends CI_Controller
{
		public function __construct() 
	    { 
	            parent::__construct();
	            $this->load->helper('url'); 
	            $this->load->library('session');
	            //$this->load->library('api');
	            $this->load->database();
	            
	    }

    	

		public function website_title_editor()
		{
			$new_title			=	htmlentities($this->input->post('new_title'));
			$new_introduction	=	htmlentities($this->input->post('new_introduction'));
			$this->load->model("Admin/Home_maintenance_model");
			$result = $this->Home_maintenance_model->website_title_editor($new_title,$new_introduction);

		}
		
	
}
?>