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
	public function planillaresumen()
	{
		if(!$this->session->userdata('session'))redirect('login');
				
		$rifced = $this->input->post("rif_cont");
		$rif = $this->input->post("rif_cont");
		//$descedocont = $this->input->post("descedocont");
		//$infoadic = $this->input->post("infoadic");
	//	var_dump($descedocont);
	//	exit ($descedocont);
		$data1['rifced']= $this->Contratista_model->consulta_planillaresumen($rifced);
		$data1['mercantil']= $this->Contratista_model->consulta_planillaresumen2($rif);
		$data1['accionistas']= $this->Contratista_model->consulta_accionistas($rif);
		$data1['comisarios']= $this->Contratista_model->consulta_comisarios($rif);
		//var_dump($data2);
		//exit ($data2);
			 $this->load->view('templates/header.php');
			 $this->load->view('templates/navigator.php');
			 $this->load->view('contratista/planillaresumen.php',$data1);
			 $this->load->view('templates/footer.php');
			 
      
			
            //redirect('contratista/infor_contratista', 'refresh');
      

	}

	
}



