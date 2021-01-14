<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluacion_desempenio extends CI_Controller {

	public function index(){

		$data['estados'] 	= $this->Configuracion_model->consulta_estados();
		$data['modalidades'] 	= $this->Evaluacion_desempenio_model->consulta_modalidades();

        $this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
		$this->load->view('evaluacion_desempenio/registro.php', $data);
        $this->load->view('templates/footer.php');
	}

	public function llenar_contratista(){
		if(!$this->session->userdata('session'))redirect('login');
		$data = $this->input->post();
		$data =	$this->Evaluacion_desempenio_model->llenar_contratista($data);
		echo json_encode($data);
	}

	public function llenar_contratista_rp(){
		if(!$this->session->userdata('session'))redirect('login');
		$data = $this->input->post();
		$data =	$this->Evaluacion_desempenio_model->llenar_contratista_rp($data);
		echo json_encode($data);
	}

	public function llenar_sub_modalidad(){
		if(!$this->session->userdata('session'))redirect('login');
		$data = $this->input->post();
		$data =	$this->Evaluacion_desempenio_model->llenar_sub_modalidad($data);
		echo json_encode($data);
	}

	public function registrar(){

		$nro_procedimiento = $this->input->POST('nro_procedimiento');
		print_r($nro_procedimiento);die;
	}
}
