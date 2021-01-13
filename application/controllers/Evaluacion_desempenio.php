<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluacion_desempenio extends CI_Controller {

	public function index(){
        $this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
		$this->load->view('evaluacion_desempenio/registro.php');
        $this->load->view('templates/footer.php');
	}
}
