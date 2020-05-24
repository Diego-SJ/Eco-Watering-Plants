<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
        parent:: __construct();
		$this->load->model("Login_model");
		if($this->session->userdata('USR_ID') != '') {  
            redirect(base_url().'home');  
        } 
    }

	public function index()
	{
		$this->load->view('register');
	}

	public function signup(){
		$errors = []; 

		$name = ucwords(trim($this->input->post("signupName")));
		$email = trim($this->input->post("signupEmail"));
		$password = trim($this->input->post("signupPassword"));
		$passwordConfirm = trim($this->input->post("signupConfirmPassword"));

		if($password != $passwordConfirm){
			$errors[] = " *El correo electronico  ya esta registrado. "; 
			echo "*Las contraseñas no coinciden. ";
        }

        if($this->Login_model->emailExist($email)){
			$errors[] = " *El correo electronico $email ya esta registrado. "; 
			echo " *El correo electronico $email ya esta registrado. ";    
        }

        if(count($errors) == 0){
			if($this->saveUser($name,$email,$password)){
				echo "ok";
			}
        } 
	}

	public function saveUser($name,$email,$password){

		$this->load->library('ciqrcode');
		$path_qr = base_url()."uploads/qr/qr_$email.png";
		$path_login_qr = base_url()."home/qr?email=$email";
        //hacemos configuraciones
        $params['data'] = $path_login_qr;
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH."uploads/qr/qr_$email.png";
        //generamos el código qr
        if($this->ciqrcode->generate($params)){
			$pass_hash = password_hash(base64_encode(hash('sha256', $password, true)),PASSWORD_DEFAULT);
        	
			$register = array(
				'name'     => $name,
				'email'    => $email,
				'password' => $pass_hash,
				'qr'       => $path_qr,
				'url_qr'   => $path_login_qr,
			);

			if($this->Login_model->registerUser($register) > 0){
				if($this->startLoginFromRegister($email,$password)){
					return true;
				}
			} else {
				return false;
			}
		} else {
			echo 'Error al crear qr, intenta más tarde.';
		}

		
	}

	public function startLoginFromRegister($email,$password){

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
				'USR_EMAIL'    => $email,
				'USR_PASS'    => $password,
			);
			$this->session->set_userdata($session_data); 
			return true;
		} else {
			return false;
		}

	}

}
