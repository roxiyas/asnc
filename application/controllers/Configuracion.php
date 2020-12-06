<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {

	public function entes(){
		$this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
        $this->load->view('configuracion/entes.php');
        $this->load->view('templates/footer.php');
	}

	public function organismo(){
		$this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
        $this->load->view('configuracion/organismo.php');
        $this->load->view('templates/footer.php');
	}

	public function save_organismo(){
			$organo				= $this->input->post("organo");
			$cod_onapre	 		= $this->input->post("cod_onapre");
			$siglas 			= $this->input->post("siglas");
			$tipo_rif			= $this->input->post("tipo_rif");
			$rif 				= $this->input->post("rif");
			$id_clasificacion 	= $this->input->post("id_clasificacion");
			$tel_local 			= $this->input->post("tel_local");
			$tel_local_2 		= $this->input->post("tel_local_2");
			$tel_movil			= $this->input->post("tel_movil");
			$tel_movil_2 		= $this->input->post("tel_movil_2");
			$pag_web 			= $this->input->post("pag_web");
			$email				= $this->input->post("email");
			$id_estado 			= $this->input->post("id_estado");
			$id_municipio 		= $this->input->post("id_municipio");
			$id_parroquia 		= $this->input->post("id_parroquia");
			$gaceta_oficial		= $this->input->post("gaceta_oficial");
			$fecha_gaceta		= $this->input->post("fecha_gaceta");

			print_r($fecha_gaceta);die;
	}

}
