<?php
class Profile_model extends CI_Model{
	
	function getUser($user_id){
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('tbl_user');
		return $query;
	}

	function change_profile_img($user_id, $ig, $in, $git, $desc, $user_photo){
		$this->db->set('user_instagram', $ig);
		$this->db->set('user_linkedin', $in);
		$this->db->set('user_github', $git);
		$this->db->set('user_description', $desc);
		$this->db->set('user_photo', $user_photo);
		$this->db->where('user_id', $user_id);
		$this->db->update('tbl_user');
	}

	function change_profile_noimg($user_id, $ig, $in, $git, $desc){
		$this->db->set('user_instagram', $ig);
		$this->db->set('user_linkedin', $in);
		$this->db->set('user_github', $git);
		$this->db->set('user_description', $desc);
		$this->db->where('user_id', $user_id);
		$this->db->update('tbl_user');
	}
}