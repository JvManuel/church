<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upcoming_events extends CI_Controller
{
  public function __construct() 
    { 
            parent::__construct();
            $this->load->helper('url'); 
            $this->load->library('session');
            $this->load->database();

    } 

  public function show_events()
  {
      echo "test";
  }
  

}
?>