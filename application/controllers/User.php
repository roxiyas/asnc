<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	// public function __construct(){
	// 	parent::__construct();
	// 	$this->load->model("User_model");
	// }

	public function index(){
		$data['organo']  = $this->User_model->consultar_organos();
		$data['entes']   = $this->User_model->consultar_entes();
		$data['enteads'] = $this->User_model->consultar_enteads();

		$this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
		$this->load->view('user/add.php', $data);
        $this->load->view('templates/footer.php');
	}

	public function save(){
		$nombre = $this->input->post("nombre");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$repeatPassord = $this->input->post("repeatPassord");

		$id_unidad = $this->input->post("id_unidad");
		$this->form_validation->set_rules('nombre', 'Nombre completo', 'required|min_length[6]');
		$this->form_validation->set_rules('email', 'Correo eléctronico', 'required|valid_email|is_unique[usuarios.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[10]|min_length[8]|alpha_numeric');
		$this->form_validation->set_rules('repeatPassord', 'Confirma contraseña', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/header.php');
	        $this->load->view('templates/navigator.php');
			$this->load->view('user/add.php');
	        $this->load->view('templates/footer.php');
		}else{

			$clave =password_hash(
	                base64_encode(
	                    hash('sha256', $password, true)
	                        ),
	                        PASSWORD_DEFAULT
	                    );

			$data = array(
				"nombre"=>$nombre,
				"password"=>$clave,
				"email" => $email,
				"foto"=>2,
				"perfil"=>1,
				"estado"=>1,
				"ultimo_login"=>date("Y-m-d h:m:s"),
				"fecha"=>date("Y-m-d"),
				"intentos"=>1,
				"unidad"=>$id_unidad
			);

			$this->User_model->save($data);
			$this->session->set_flashdata('success', 'Se guardo los datos correctamente');
			redirect('user/index');

		}
	}

	// CUENTA DANTE
	public function contrato(){
		$this->load->view('contrato.php');
	}

	public function cuentadante(){
		$data['organo']= $this->User_model->consultar_organos();
		$data['entes']= $this->User_model->consultar_entes();

		// $this->load->view('templates/header.php');
        // $this->load->view('templates/navigator.php');
		$this->load->view('user/reg_cuentadante.php', $data);
        $this->load->view('templates/footer.php');
	}

	// public function listar_entes(){
	// 	$data = $this->input->post();
	// 	$data =	$this->User_model->consultar_entes($data);
	// 	echo json_encode($data);
	// }
	//
	// public function listar_entesads(){
	// 	$data = $this->input->post();
	// 	$data =	$this->User_model->consultar_entesads($data);
	// 	echo json_encode($data);
	// }

}
