<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('login/index.php');
	}

	public function validacion(){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST ['contrasena'];
        $data = $this->login_model->iniciar($usuario,$contrasena);

		if($data){
            $user_data =[
				'id_user'	=> $data['id'],
                'nombre'    => $data['nombre'],
                'email'     => $data['email'],
                'perfil'    => $data['perfil'],
				'id_unidad' => $data['unidad'],
                'session'   => TRUE,
            ];
            $this->session->set_userdata($user_data);
            redirect('home/index');
        }else{
            redirect('login/index');
        }
    }

	public function logout(){
		$this->session->sess_destroy();
		redirect('login/index');
	}
}
