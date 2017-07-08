<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us_controller extends CI_Controller
{
		public function __construct() 
	    { 
	            parent::__construct();
	            $this->load->helper('url'); 
	            $this->load->library('session');
	            //$this->load->library('api');
	            $this->load->database();
	            
	    }

    	

		public function contact_editor()
		{
			if(isset($_SESSION['logged_in'])==TRUE)
			{
			$new_contact		=	htmlentities($this->input->post('new_contact'));
			$new_type			=	htmlentities($this->input->post('new_type'));
			$this->load->model("Admin/Contact_us_maintenance_model");
			$result = $this->Contact_us_maintenance_model->contact_editor($new_contact,$new_type);
			}
		}
		public function contact_remover()
		{
			if(isset($_SESSION['logged_in'])==TRUE)
			{
			$cid		=	htmlentities($this->input->post('cid'));
			$this->load->model("Admin/Contact_us_maintenance_model");
			$result = $this->Contact_us_maintenance_model->contact_remover($cid);
			}
		}
		
	
}
?>