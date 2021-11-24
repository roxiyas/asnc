<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class Publicaciones extends CI_Controller{
		public function __construct(){
			parent :: __construct();
			//$this->load->model('Tablas_model');
		}

		public function banco(){
			$this->load->view('templates/header.php');
			$this->load->view('templates/navigator.php');
			$this->load->view('publicaciones/banco.php');
			$this->load->view('templates/footer.php');
		}

		public function tipo_cuenta(){
			$this->load->view('templates/header.php');
			$this->load->view('templates/navigator.php');
			$this->load->view('publicaciones/tipo_cuenta.php');
			$this->load->view('templates/footer.php');
		}

		public function datosbancarios(){
			$this->load->view('templates/header.php');
			$this->load->view('templates/navigator.php');
			$this->load->view('publicaciones/datosbancarios.php');
			$this->load->view('templates/footer.php');
		}

		public function modalidad(){
			$this->load->view('templates/header.php');
			$this->load->view('templates/navigator.php');
			$this->load->view('publicaciones/modalidad.php');
			$this->load->view('templates/footer.php');
		}

		public function mecanismo(){
			$this->load->view('templates/header.php');
			$this->load->view('templates/navigator.php');
			$this->load->view('publicaciones/mecanismo.php');
			$this->load->view('templates/footer.php');
		}

		public function actividad(){
			$this->load->view('templates/header.php');
			$this->load->view('templates/navigator.php');
			$this->load->view('publicaciones/actividad.php');
			$this->load->view('templates/footer.php');
		}
	}

?>
