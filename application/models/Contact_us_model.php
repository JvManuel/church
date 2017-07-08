<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Contact_us_model extends CI_Model{

		public function get_info()
		{
			$showdataquery="select * from contact_tbl order by type";
			$query = $this->db->query($showdataquery);
			$this->db->close();
			return array("Data" => $query);
		}
	}
?>