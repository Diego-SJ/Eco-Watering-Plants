<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
        parent:: __construct();
		$this->load->model("Profile_model");
    }

	public function index()
	{
		$iduser = ($this->session->userdata('USR_ID') != NULL)?$this->session->userdata('USR_ID'):1;

		$myaccount = array(
			'profile'   => $this->Profile_model->getMyProfile($iduser),
			// 'messages'   => $this->Profile_model->getMessages(),
		);

		$this->load->view('layout/header',$myaccount);
		$this->load->view('profile',$myaccount);
		$this->load->view('layout/footer');
	}

	public function updateProfile(){
		if($_FILES['photo']['name'] != NULL){
			$iduser = ($this->session->userdata('USR_ID') != NULL)?$this->session->userdata('USR_ID'):1;

			$config['upload_path'] = './uploads/archivos/';
			$config['overwrite'] = TRUE;
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '20048';

			$this->load->library('upload',$config);
			
			if (!$this->upload->do_upload("photo")) {
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect(base_url().'profile');  
			} else {
                $file_info = $this->upload->data();
                $img1 = base_url().'uploads/archivos/'.$file_info['file_name'];

				$data = array(
					'name'   => trim($this->input->post('inputName')),
					'email'   => trim($this->input->post('inputEmail')),
					'address'  => trim($this->input->post('inputAddress')),
					'state'   => trim($this->input->post('inputState')),
					'city'   => trim($this->input->post('inputCity')),
					'zip'  => trim($this->input->post('inputZip')),
					'bio'  => trim($this->input->post('inputBio')),
					'photo'  => $img1,
				);

				if($this->Profile_model->updateMyProfile($data,$iduser)){
					$this->session->set_flashdata('success', 'Perfil actualizado con éxito.');  
					redirect(base_url().'profile');  
				} else {
					$this->session->set_flashdata('error', 'Algo salió mal, intenta más tarde.');  
					redirect(base_url().'profile');  
				}
			}
		} else {
			$data = array(
				'name'   => trim($this->input->post('inputName')),
				'email'   => trim($this->input->post('inputEmail')),
				'address'  => trim($this->input->post('inputAddress')),
				'state'   => trim($this->input->post('inputState')),
				'city'   => trim($this->input->post('inputCity')),
				'zip'  => trim($this->input->post('inputZip')),
				'bio'  => trim($this->input->post('inputBio')),
			);

			if($this->Profile_model->updateMyProfile($data,$iduser)){
				$this->session->set_flashdata('success', 'Perfil actualizado con éxito.');  
				redirect(base_url().'profile');  
			} else {
				$this->session->set_flashdata('error', 'Algo salió mal, intenta más tarde.');  
				redirect(base_url().'profile');  
			}
		}
	}

	public function updatePassword(){
		$iduser = $this->session->userdata('USER_ID');
		$currentPassword = $this->session->userdata('USER_PASS');
		$mypass = trim($this->input->post('inputName'));
		$mynewpass = trim($this->input->post('inputPass'));

		if(password_verify(base64_encode(hash('sha256', $mypass, true)),$currentPassword)){
			$pass_hash = password_hash(base64_encode(hash('sha256', $mynewpass, true)),PASSWORD_DEFAULT);
			$data = array(
				'password' => $pass_hash,
			);
			if($this->Profile_model->updateMyProfile($data,$iduser)){
				$session_data = array(
					'USER_PASS' => $pass_hash,
				);
				$this->session->set_userdata($session_data); 
				$this->session->set_flashdata('success', 'Contraseña actualizada.');  
				redirect(base_url().'profile');  
			}
		} else {
			$this->session->set_flashdata('error', 'La contraseña actual es incorrecta.');  
			redirect(base_url().'profile');  
		}
	}
}
