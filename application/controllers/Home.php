<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent:: __construct();
		$this->load->model("Home_model");
		$this->load->model("Profile_model");
		$this->load->model("Login_model");
    }

	public function index()
	{
		$iduser = ($this->session->userdata('USR_ID') != NULL)?$this->session->userdata('USR_ID'):1;
		$data = array (
			'profile'   => $this->Profile_model->getMyProfile($iduser),
			// 'products' => $this->Home_model->getTotalProducts(),
			// 'sales' => $this->Home_model->getTotalSales(),
			// 'categories' => $this->Home_model->getTotalCategories(),
			// 'users' => $this->Home_model->getTotalUsers(),
		);

		$this->load->view('layout/header',$data);
		$this->load->view('home',$data);
		$this->load->view('layout/footer');
	}

	public function plant1(){
		$iduser = ($this->session->userdata('USR_ID') != NULL)?$this->session->userdata('USR_ID'):1;
		$data = array (
			'profile'   => $this->Profile_model->getMyProfile($iduser),
		);
		$this->load->view('plant_1',$data);
	}
	public function plant2(){
		$iduser = ($this->session->userdata('USR_ID') != NULL)?$this->session->userdata('USR_ID'):1;
		$data = array (
			'profile'   => $this->Profile_model->getMyProfile($iduser),
		);
		$this->load->view('plant_2',$data);
	}
	public function plant3(){
		$iduser = ($this->session->userdata('USR_ID') != NULL)?$this->session->userdata('USR_ID'):1;
		$data = array (
			'profile'   => $this->Profile_model->getMyProfile($iduser),
		);
		$this->load->view('plant_3',$data);
	}
	public function plant4(){
		$iduser = ($this->session->userdata('USR_ID') != NULL)?$this->session->userdata('USR_ID'):1;
		$data = array (
			'profile'   => $this->Profile_model->getMyProfile($iduser),
		);
		$this->load->view('plant_4',$data);
	}

	public function qr(){
		$email = $this->input->get('email');
		if($this->Login_model->getLogin($email)){
			$row = $this->Login_model->getLogin($email);

			$id        = $row['iduser'];
			$name      = $row['name'];
			$email      = $row['email'];
			$password  = $row['password'];

			//SESSIONS STRAT
			$session_data = array(
				'USR_ID'      => $id,
				'USR_NAME'    => $name,
				'USR_EMAIL'   => $email,
				'USR_PASS'    => $password,
			);
			$this->session->set_userdata($session_data); 
			if($this->session->userdata('USR_ID') != NULL){
				redirect(base_url().'home');
			}else {
				redirect(base_url().'login');
			}
		} else {
			redirect(base_url().'login');
		}
	}
	
	public function logout(){
		//SESSIONS DESTROY
		$session_data = array(
			'USR_ID',
			'USR_NAME',
			'USR_EMAIL',
			'USR_PASS',
		);
		$this->session->unset_userdata($session_data); 
		if($this->session->userdata('USR_ID') == NULL){
			redirect(base_url()); 
		}
	}
}
