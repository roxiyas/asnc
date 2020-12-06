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
                    'usuario'    => $data['usuario'],
                    'cedula'     => $data['cedula'],
                    'nombre_ape' => $data['nombre_ape'],
                    'rol'        => $data['id_rol'],
                    'session'    => TRUE,
                ];
                $this->session->set_userdata($user_data);
                redirect('home/index');
            }else
            {
                redirect('login/index');
            }
        }
}
