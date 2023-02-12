s<?php
class Auth extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('backend/Login_model','login_model');
        error_reporting(0);
	}

	function index(){
		$this->load->view('backend/v_login');
        $this->load->helper('text');
	}

	function login(){
        $username=str_replace("'", "", htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES));
        $password=str_replace("'", "", htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));
        $validate_us=$this->login_model->validasi_username($username);
        if($validate_us->num_rows() > 0){
            $validate_ps=$this->login_model->validasi_password($username,$password);
         		if($validate_ps->num_rows() > 0){
						 $x = $validate_ps->row_array();
						  if($x['user_status'] == 1){
								if($x['is_active'] == 1){
									$this->session->set_userdata('logged',TRUE);
									$this->session->set_userdata('user',$u);
									// print_r($x);die();
									if($x['user_level']=='1'){ //Administrator
										$this->session->set_userdata('access','1');
										$id=$x['user_id'];
										$name=$x['user_name'];
										$role=$x['user_level'];
										$this->session->set_userdata('id',$id);
										$this->session->set_userdata('name',$name);
										$this->session->set_userdata('role',$role);
										redirect('backend/dashboard');

									}else{ //Others User 
											$this->session->set_userdata('access','2');
										$id=$x['user_id'];
										$name=$x['user_name'];
										$role=$x['user_level'];
										$this->session->set_userdata('id',$id);
										$this->session->set_userdata('name',$name);
										$this->session->set_userdata('role',$role);
										redirect('backend/dashboard');
									}	

								}else{
									$url=$this->input->post('url');
									$this->session->set_flashdata('modal','login()');
									redirect($url);
								}

							}else{
								$url=$this->input->post('url');
								$this->session->set_flashdata('modal','login()');
                echo $this->session->set_flashdata('msg','
								<div class="alert alert-danger alert-dismissible fade show mb-0 fw-semibold" role="alert">
									Maaf, akun anda telah disuspend
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								');
                redirect($url);
							}

            }else{
							$url=$this->input->post('url');
							$this->session->set_flashdata('modal','login()');
                echo $this->session->set_flashdata('msg','
								<div class="alert alert-warning alert-dismissible fade show mb-0 fw-semibold" role="alert">
									Maaf, Password salah
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								');
                redirect($url);
            }

        }else{
					$url=$this->input->post('url');
					$this->session->set_flashdata('modal','login()');
            $this->session->set_flashdata('msg','
						<div class="alert alert-warning alert-dismissible fade show mb-0 fw-semibold" role="alert">
							Maaf, Email tidak dikenali
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						');
            redirect($url);
        }

    }
       
    function logout(){
        $this->session->sess_destroy();
        $url=base_url();
        redirect($url);
    }
	
}