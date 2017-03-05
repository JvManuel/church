<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Learn_more_model extends CI_Model{

		public function learn_more_editor($new_about_us,$new_mission,$new_vision,$new_location)
		{
			$about_us = array(
				'text'	      => $new_about_us,
				);
			$this->db->where('type', "About_Us");
			$this->db->update('info_tbl', $about_us);

			$mission = array(
				'text'	      => $new_mission,
				);
			$this->db->where('type', "Mission");
			$this->db->update('info_tbl', $mission);

			$vision = array(
				'text'	      => $new_vision,
				);
			$this->db->where('type', "Vision");
			$this->db->update('info_tbl', $vision);

			$location = array(
				'text'	      => $new_location,
				);
			$this->db->where('type', "Location");
			$this->db->update('info_tbl', $location);

			$this->db->close();
		}
	}
?>