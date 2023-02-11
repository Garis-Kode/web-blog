script<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Subscribe_model','subscribe_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
	}

	function index(){
		$this->load->library('form_validation');
		$url = $this->input->post('url',TRUE);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message','1');
			redirect($url);
		}else{
			$email=$this->input->post('email',TRUE);
			$checking_email = $this->subscribe_model->checking_email($email);
			if($checking_email->num_rows() > 0){
				$this->session->set_flashdata('message','1');
				redirect($url);
			}else{
				$this->subscribe_model->save_subcribe($email);
				$this->session->set_flashdata('message','1');
				redirect($url);
			}
			
		}
	}
}