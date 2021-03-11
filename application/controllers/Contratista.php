<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contratista extends CI_Controller
{


	public function infor_contratista()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/navigator.php');
		$this->load->view('contratista/infor_contratista.php');
		$this->load->view('templates/footer.php');
	}

	public function llenar_contratista()
	{
		if(!$this->session->userdata('session'))redirect('login');
		$data = $this->input->post();
		$data =	$this->Contratista_model->llenar_contratista($data);
		echo json_encode($data);
	}

}
