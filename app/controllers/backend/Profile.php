<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Changepass_model','changepass_model');
		$this->load->model('backend/Profile_model','profile_model');
		$this->load->helper('text');
	}

	function index(){
		$data['getUser'] = $this->profile_model->getUser($this->session->userdata('id'))->row_array();
		// print_r($data['getUser']);die();
		$this->load->view('backend/v_profile', $data);
	}

	function change(){
		$user_id = $this->session->userdata('id');
		if(!empty($user_id)){
			$old_password = htmlspecialchars($this->input->post('old_password',TRUE),ENT_QUOTES);
			$new_password = htmlspecialchars($this->input->post('new_password',TRUE),ENT_QUOTES);
			$conf_password = htmlspecialchars($this->input->post('conf_password',TRUE),ENT_QUOTES);
			$old_pass = md5($old_password);
			$new_pass = md5($new_password);
			$checking_old_password = $this->changepass_model->checking_old_password($user_id,$old_pass);
			if($checking_old_password->num_rows() > 0){
				if($new_password == $conf_password){
					$this->changepass_model->change_password($user_id,$new_pass);
					$this->session->set_flashdata('msg','success');
					redirect('backend/profile');
				}else{
					$this->session->set_flashdata('msg','error-notmatch');
					redirect('backend/profile');
				}
			}else{
				$this->session->set_flashdata('msg','error-notfound');
				redirect('backend/profile');
			}
		}else{
			$this->session->set_flashdata('msg','error');
			redirect('backend/profile');
		}
	}

	function setting(){
		$user_id = $this->session->userdata('id');
		$nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
		$email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$ig=htmlspecialchars($this->input->post('ig',TRUE),ENT_QUOTES);
		$git=htmlspecialchars($this->input->post('git',TRUE),ENT_QUOTES);
		$in=htmlspecialchars($this->input->post('in',TRUE),ENT_QUOTES);
		$desc=htmlspecialchars($this->input->post('desc',TRUE),ENT_QUOTES);

		if(!empty($_FILES['foto']['name'])){
			$config['upload_path'] = './assets/images/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;
	    $this->upload->initialize($config);
			if ($this->upload->do_upload('foto')){
					$gbr = $this->upload->data();
						//Compress Image
						$config['image_library']='gd2';
						$config['source_image']='./assets/images/'.$gbr['file_name'];
						$config['create_thumb']= FALSE;
						$config['maintain_ratio']= FALSE;
						$config['quality']= '100%';
						$config['width']= 200;
						$config['height']= 200;
						$config['new_image']= './assets/images/'.$gbr['file_name'];
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();

					$gambar=$gbr['file_name'];		
					$this->profile_model->change_profile_img($user_id, $nama, $email, $ig, $in, $git, $desc, $gambar);
					echo $this->session->set_flashdata('msg','info');
					redirect('backend/profile');
				}else{
								echo $this->session->set_flashdata('msg','error-img');
								redirect('backend/profile');
				}
							 
			}else{
				$this->profile_model->change_profile_noimg($user_id, $nama, $email, $ig, $in, $git, $desc);
				echo $this->session->set_flashdata('msg','success-profil');
				redirect('backend/profile');
			}
		}		
}