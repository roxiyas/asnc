<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
		$this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
		$this->load->view('user/add.php');
        $this->load->view('templates/footer.php');
	}

	public function save(){
		$nombre = $this->input->post("nombre");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$repeatPassord = $this->input->post("repeatPassord");

		$this->form_validation->set_rules('nombre', 'Nombre completo', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Correo eléctronico', 'required|valid_email|is_unique[usuarios.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[10]|min_length[8]|alpha_numeric');
		$this->form_validation->set_rules('repeatPassord', 'Confirma contraseña', 'required|matches[password]');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/header.php');
	        $this->load->view('templates/navigator.php');
			$this->load->view('user/add.php');
	        $this->load->view('templates/footer.php');
		}else{
			$data = array(
				"nombre"=>$nombre,
				"usuario"=>$nombre,
				"password"=>md5($password),
				"perfil"=>1,
				"estado"=>1,
				"ultimo_login"=>date("Y-m-d h:m:s"),
				"fecha"=>date("Y-m-d"),
				"intentos"=>1,
				"unidad"=>1,
				"email" => $email
			);

			$this->User_model->save($data);
			$this->session->set_flashdata('sa-success2', 'Se guardo los datos correctamente');
			redirect('user/index');
		}
	}
}
