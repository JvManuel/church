<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Upcoming_events_model extends CI_Model{

		public function get_info()
		{
			$showdataquery="select * from events_tbl";
			$query = $this->db->query($showdataquery);
			$this->db->close();
			return array("Data" => $query);
		}
	}
?>