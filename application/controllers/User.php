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

		$data['organismos'] = $this->Configuracion_model->consulta_organismo();
		$data['tipo_rif'] 	= $this->Configuracion_model->consulta_tipo_rif();
		$data['estados'] 	= $this->Configuracion_model->consulta_estados();

		// $this->load->view('templates/header.php');
        // $this->load->view('templates/navigator.php');
		$this->load->view('User/reg_cuentadante.php', $data);
        $this->load->view('templates/footer.php');
	}
	// guardar organismo externo
	public function save_organismo(){
		
		$data = array(
			'id_organoads'		=> $this->input->post("id_organoads"),
			'desc_organo'		=> $this->input->post("organo"),
			'cod_onapre'	 	=> $this->input->post("cod_onapre"),
			'siglas' 			=> $this->input->post("siglas"),
			'tipo_rif'			=> $this->input->post("tipo_rif"),
			'rif' 				=> $this->input->post("rif"),
			'id_clasificacion' 	=> $this->input->post("id_clasificacion"),
			'tel_local' 		=> $this->input->post("tel_local"),
			'tel_local_2' 		=> $this->input->post("tel_local_2"),
			'tel_movil'			=> $this->input->post("tel_movil"),
			'tel_movil_2' 		=> $this->input->post("tel_movil_2"),
			'pag_web' 			=> $this->input->post("pag_web"),
			'email'				=> $this->input->post("email"),
			'id_estado' 		=> $this->input->post("id_estado"),
			'id_municipio' 		=> $this->input->post("id_municipio"),
			'id_parroquia' 		=> $this->input->post("id_parroquia"),
			'direccion_fiscal' 	=> $this->input->post("direccion_fiscal"),
			'gaceta_oficial'	=> $this->input->post("gaceta_oficial"),
			'fecha_gaceta'		=> $this->input->post("fecha_gaceta"),
			'usuario' 			=> $this->session->userdata('id_user')
		);
		$data = $this->Configuracion_model->save_organismo($data);
		$this->session->set_flashdata('sa-success2', 'Se guardo los datos correctamente');
		redirect('user/cuentadante');
	} 
}
