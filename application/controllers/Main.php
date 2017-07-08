<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct() 
    { 
            parent::__construct();
            $this->load->helper('url'); 
            $this->load->library('session');
            $this->load->database();

            $this->load->model("Web_model");
	       	$result = $this->Web_model->get_Title();
	       	$last = $this->uri->total_segments();
		 	$data['Page_Name'] = $this->uri->segment($last);
	       	$result_Data=$result['Data'];
	        foreach ($result_Data->result() as $row)
	        {
	        		$data['title']=strtoupper($row->title);
	        }
	        $this->load->view("Header_view",$data);

    } 

	/**public function one($name)
	{
		$this->load->model("hello_model");
		$Profile = $this ->hello_model->getProfile("John Vincent");
		$data = array("name" => $name);
		$data['Profile']=$Profile;
		$this->load->view("Login",$data);

	}**/

	public function Home()
	{
		 $this->load->model("Learn_more_model");
	     $result = $this->Learn_more_model->get_Info();
	     $result_Data=$result['Data'];
	     foreach ($result_Data->result() as $row)
	     {
	     		$data[$row->type]=$row->text;
	     }
         $this->load->view("Home_view",$data);
         $this->load->view("Footer_view");

	}

	public function Learn_more()
	{
		 $this->load->model("Learn_more_model");
	     $result = $this->Learn_more_model->get_Info();

	     $result_Data=$result['Data'];
	     foreach ($result_Data->result() as $row)
	     {
	     		$data[$row->type]=strtoupper($row->text);
	     }
         $this->load->view("Learn_more_view",$data);
         $this->load->view("Footer_view");

	}

	public function Upcoming_Events()
	{
             
         $this->load->view("Upcoming_events_view");
         $this->load->view("Footer_view");

	}

	public function Contact_us()
	{
         $this->load->model("Contact_us_model");
		 $result = $this->Contact_us_model->get_Info();
		 $data['contact'] = $result['Data'];

         $this->load->view("Contact_us_view",$data);
         $this->load->view("Footer_view");

	}

	public function Log_in()
	{
         if(isset($_SESSION['logged_in'])==FALSE)
		 {  
	         $this->load->view("Log_in_view");
	         $this->load->view("Footer_view");
     	 }
     	 else
		 {
			header("location:Admin_page");
		  }

	}
	public function Log_out()
	{
		//$this->api->Audit($_SESSION['uid']," logged out");
		$this->session->sess_destroy();
		$_SESSION['logged_in']=FALSE;
		header("location:Log_in");	
	}

	public function Admin()
	{
		
		// if(isset($_SESSION['logged_in'])==TRUE&&$_SESSION['status']=="Inactive")
		// {
		// 	header("location:Verification");
		// }
		if(isset($_SESSION['logged_in'])==TRUE)
		{
		$this->load->view("Admin/Admin_home_view");


		}
		else
		{
		header("location:Log_In");
		}

	}

	public function Home_maintenance()
	{
		if(isset($_SESSION['logged_in'])==TRUE)
		{
		$this->load->model("Learn_more_model");
	    $result = $this->Learn_more_model->get_Info();
	    $result_Data=$result['Data'];
	    foreach ($result_Data->result() as $row)
	    {
	     	$data[$row->type]=$row->text;
	    }
		$this->load->view("Admin/Home_maintenance_view",$data);

		}
		else
		{
		header("location:Log_In");
		}
	}
	
	public function Learn_more_maintenance()
	{
		if(isset($_SESSION['logged_in'])==TRUE)
		{
		$this->load->model("Learn_more_model");
	    $result = $this->Learn_more_model->get_Info();
	    $result_Data=$result['Data'];
	    foreach ($result_Data->result() as $row)
	    {
	     	$data[$row->type]=$row->text;
	    }
		$this->load->view("Admin/Learn_more_view",$data);

		}
		else
		{
		header("location:Log_In");
		}
	}

	public function Contact_us_maintenance()
	{
		if(isset($_SESSION['logged_in'])==TRUE)
		{
	    $this->load->model("Contact_us_model");
		$result = $this->Contact_us_model->get_Info();
		$data['contact'] = $result['Data'];
		$this->load->view("Admin/Contact_us_maintenance",$data);

		}
		else
		{
		header("location:Log_In");
		}
	}

	public function Upcoming_events_maintenance()
	{
		if(isset($_SESSION['logged_in'])==TRUE)
		{
	    
		$this->load->view("Admin/Upcoming_events_view");

		}
		else
		{
		header("location:Log_In");
		}
	}

}
?>