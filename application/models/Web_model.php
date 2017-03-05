<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Web_model extends CI_Model{

		public function get_Title()
		{
			$showdataquery="select * from web_tbl";
			$query = $this->db->query($showdataquery);
			$this->db->close();
			return array("Data" => $query);
		}
	}
?>