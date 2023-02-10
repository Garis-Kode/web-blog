<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Blog_model','blog_model');
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Home_model','home_model');
		$this->load->model('Site_model','site_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
	}
	function index(){
		$jum=$this->blog_model->get_blogs();
	    $page=$this->uri->segment(3);
	    if(!$page):
	        $off = 0;
	    else:
	        $off = $page;
	    endif;
	    $limit=9;
	    $offset = $off > 0 ? (($off - 1) * $limit) : $off;
	    $config['base_url'] = base_url() . 'blog/page/';
	    $config['total_rows'] = $jum->num_rows();
	    $config['per_page'] = $limit;
	    $config['uri_segment'] = 3;
	    $config['use_page_numbers']=TRUE;

	// 		<nav aria-label="..." class="">
	// 		<ul class="pagination">
	// 				<li class="page-item disabled shadow">
	// 						<a class="page-link border-0 rounded-0">Previous</a>
	// 				</li>
	// 				<li class="page-item shadow"><a class="page-link border-0" href="#">1</a></li>
	// 				<li class="page-item active shadow" aria-current="page">
	// 						<a class="page-link border-0" href="#">2</a>
	// 				</li>
	// 				<li class="page-item shadow"><a class="page-link border-0" href="#">3</a></li>
	// 				<li class="page-item shadow ">
	// 						<a class="page-link border-0 rounded-0" href="#">Next</a>
	// 				</li>
	// 		</ul>
	// </nav>

	    //Tambahan untuk styling
			$config['full_tag_open'] = '<ul class="pagination fw-bold">';        
			$config['full_tag_close'] = '</ul>';        
			$config['first_link'] = 'First';        
			$config['last_link'] = 'Last';        
			$config['first_tag_open'] = '<li class="page-item shadow border-0 rounded-0"><span class="page-link border-0 rounded-0 text-blue">';        
			$config['first_tag_close'] = '</span></li>';        
			$config['prev_link'] = '<i class="bi bi-arrow-left-short"></i> Prev';        
			$config['prev_tag_open'] = '<li class="page-item shadow border-0 rounded-0"><span class="page-link border-0 rounded-0 text-blue">';        
			$config['prev_tag_close'] = '</span></li>';        
			$config['next_link'] = 'Next <i class="bi bi-arrow-right-short"></i>';        
			$config['next_tag_open'] = '<li class="page-item shadow border-0 rounded-0"><span class="page-link border-0 rounded-0 text-blue">';        
			$config['next_tag_close'] = '</span></li>';        
			$config['last_tag_open'] = '<li class="page-item shadow border-0 rounded-0"><span class="page-link border-0 rounded-0 text-blue">';        
			$config['last_tag_close'] = '</span></li>';        
			$config['cur_tag_open'] = '<li class="page-item shadow border-0 rounded-0"><a class="page-link bg-blue text-white " href="#">';        
			$config['cur_tag_close'] = '</a></li>';        
			$config['num_tag_open'] = '<li class="page-item shadow border-0 rounded-0"><span class="page-link border-0 rounded-0 text-blue">';        
			$config['num_tag_close'] = '</span></li>';

	    $this->pagination->initialize($config);
	    $x['page'] =$this->pagination->create_links();
		$x['data']=$this->blog_model->get_blog_perpage($offset,$limit);
		//print_r($this->db->last_query()); 
		$x['judul']="Blog";
		if(empty($this->uri->segment(3))){
			$next_page=2;
			$x['canonical']=site_url('blog');
			$x['url_prev']="";
		}elseif($this->uri->segment(3)=='1'){
			$next_page=2;
			$x['canonical']=site_url('blog');
			$x['url_prev']=site_url('blog');
		}elseif($this->uri->segment(3)=='2'){
			$next_page=$this->uri->segment(3)+1;
			$x['canonical']=site_url('blog/page/'.$this->uri->segment(3));
			$x['url_prev']=site_url('blog');
		}else{
			$next_page=$this->uri->segment(3)+1;
			$prev_page=$this->uri->segment(3)-1;
			$x['canonical']=site_url('blog/page/'.$this->uri->segment(3));
			$x['url_prev']=site_url('blog/page/'.$prev_page);
		}
		
		$x['url_next']=site_url('blog/page/'.$next_page);
		$x['populer_post'] = $this->blog_model->get_popular_post();
		$site_info = $this->db->get('tbl_site', 1)->row();
		$x['logo'] =  $site_info->site_logo_header;
		$x['icon'] = $site_info->site_favicon;
		$x['site_image'] = $site_info->site_logo_big;
		$x['header'] = $this->load->view('header',$v,TRUE);
		$x['footer'] = $this->load->view('footer','',TRUE);
		$site = $this->site_model->get_site_data()->row_array();
		$x['site_name'] = $site['site_name'];
		$x['site_twitter'] = $site['site_twitter'];
		$query = $this->db->query("SELECT GROUP_CONCAT(category_name) AS category_name FROM tbl_category")->row_array();
		$x['meta_description'] = $query['category_name'];
		$this->load->view('blog_view',$x);
	}


	function detail($slug){
		$data=$this->blog_model->get_post_by_slug($slug);
		if($data->num_rows() > 0){
		    $q=$data->row_array();
    		$kode=$q['post_id'];
    		$x['title']=$q['post_title'];
    		if(empty($q['post_description'])){
    			$x['description'] = strip_tags(word_limiter($q['post_contents'],25));	
    		}else{
    			$x['description'] = $q['post_description'];
    		}
    		$x['image']=$q['post_image'];
    		$x['slug']=$q['post_slug'];
    		$x['content']=$q['post_contents'];
    		$x['views']=$q['post_views'];
    		$x['comment']=$q['comment_total'];
    		$x['author']=$q['user_name'];
    		$x['category']=$q['category_name'];
    		$x['category_slug']=$q['category_slug'];
    		$x['date']=$q['post_date'];
    		$x['tags']=$q['post_tags'];
    		$x['post_id']=$kode;
    		$category_id = $q['category_id'];
    		$this->blog_model->count_views($kode);
    		$x['related_post']  = $this->blog_model->get_related_post($category_id,$kode);
    		$x['show_comments'] = $this->blog_model->show_comments($kode);
    		$site_info = $this->db->get('tbl_site', 1)->row();
			$x['logo'] =  $site_info->site_logo_header;
			$x['icon'] = $site_info->site_favicon;
    		$x['header'] = $this->load->view('header',$x,TRUE);
    		$x['footer'] = $this->load->view('footer',$x,TRUE);
    		$site = $this->site_model->get_site_data()->row_array();
			$x['site_name'] = $site['site_name'];
			$x['site_twitter'] = $site['site_twitter'];
			$x['site_facebook'] = $site['site_facebook'];
    		$this->load->view('blog_detail_view',$x);
		}else{
		    redirect('blog');
		}
			
	}


	function submit_komentar(){
    	$post_id = htmlspecialchars($this->input->post('post_id',TRUE),ENT_QUOTES);
    	$slug = htmlspecialchars($this->input->post('slug',TRUE),ENT_QUOTES);
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('comment', 'Comment', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('blog/'.$slug);
		}else{
			$name=$this->input->post('name',TRUE);
			$email=$this->input->post('email',TRUE);
			$comment=htmlspecialchars($this->input->post('comment',TRUE),ENT_QUOTES);
			$this->blog_model->save_comment($post_id,$name,$email,$comment);
			$this->session->set_flashdata('msg','<div class="alert alert-info">Terima kasih atas respon Anda, komentar Anda akan tampil setelah moderasi</div>');
			redirect('blog/'.$slug);
		}
	}

	function subscribe(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			$base_url = site_url();
			redirect($base_url);
		}else{
			$email = $this->input->post('email',TRUE);
			$url = $this->input->post('url',TRUE);
			$checking_email = $this->home_model->checking_email($email);
			if($checking_email->num_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-info">Terima kasih telah berlangganan.</div>');
				redirect($url);
			}else{
				$this->home_model->save_subcribe($email);
				$this->session->set_flashdata('msg','<div class="alert alert-info">Terima kasih telah berlangganan.</div>');
				redirect($url);
			}
			
		}
	}

}