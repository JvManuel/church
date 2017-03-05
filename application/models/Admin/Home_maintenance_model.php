<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home_maintenance_model extends CI_Model{

		public function website_title_editor($new_title,$new_introduction)
		{
			$title = array(
				'title'	      => $new_title,
				);
			$this->db->where('wid', "1");
			$this->db->update('web_tbl', $title);

			$intro = array(
				'text'	      => $new_introduction,
				);
			$this->db->where('type', "Introduction");
			$this->db->update('info_tbl', $intro);

			$this->db->close();
		}
	}
?>