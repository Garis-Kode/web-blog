<?php
class Dashboard_model extends CI_Model{
	
	function author_post(){
        $query = $this->db->query("SELECT user_name, is_active, COUNT(*) as posting FROM tbl_post JOIN tbl_user ON user_id=post_user_id where is_active = 1 GROUP BY post_user_id ORDER BY posting DESC;");
        return $query;
    }

    function count_my_posts(){
      $this->db->where('post_user_id', $this->session->userdata('id'));
    	$query = $this->db->get('tbl_post');
    	return $query;
    }

    function my_article($id){
      $query = $this->db->query("SELECT post_title, post_views, post_id FROM tbl_post WHERE post_user_id = '$id' ORDER BY post_views DESC;");
      return $query;
  }

}