<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Contact_us_maintenance_model extends CI_Model{

		public function contact_editor($new_contact,$new_type)
		{
			$contact = array(
				'contact'	      => $new_contact,
				'type'			  => $new_type
				);
			$this->db->insert('contact_tbl', $contact);
			$this->db->close();
		}

		public function contact_remover($cid)
		{
			$this->db->where('cid', $cid);
		    $this->db->delete('contact_tbl');
			$this->db->close();
		}
	}
?>