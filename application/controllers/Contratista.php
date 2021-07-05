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
		$proceso_id = $this->input->post("proceso_id");
		$data1['rifced']= $this->Contratista_model->consulta_planillaresumen($rifced);
		$data1['mercantil']= $this->Contratista_model->consulta_planillaresumen2($rif);
		$data1['accionistas']= $this->Contratista_model->consulta_accionistas($rif,$proceso_id);
		$data1['comisarios']= $this->Contratista_model->consulta_comisarios($rif,$proceso_id);
		$data1['actividad']= $this->Contratista_model->consulta_activ_prod_clasif_compr_edo($rif,$proceso_id);
		$data1['obraservicio']= $this->Contratista_model->consulta_rel_obr_serv($rif,$proceso_id);
		$data1['relservicio']= $this->Contratista_model->consulta_rel_cliente($rif,$proceso_id);
		$data1['inforproduc']= $this->Contratista_model->Informe_producto($rif,$proceso_id);
		$data1['consultadictamen']= $this->Contratista_model->consulta_dictamen($rif,$proceso_id);
		$data1['consulta_Balance']= $this->Contratista_model->consulta_Balance($rif,$proceso_id);
		$data1['edoresultados']= $this->Contratista_model->consulta_edoresultados($rif,$proceso_id);
		$data1['anafinancieros']= $this->Contratista_model->consulta_anafinancieros($rif,$proceso_id);

  $data1['proceso_id'] = $this->Contratista_model->llenar_contratista_rp($proceso_id);

			 $this->load->view('templates/header.php');
			 $this->load->view('templates/navigator.php');
			 $this->load->view('contratista/planillaresumen.php',$data1);
			 $this->load->view('templates/footer.php');
          //redirect('contratista/infor_contratista', 'refresh');


	}



	public function ver_comprobante()
	{
		  	if(!$this->session->userdata('session'))redirect('login');
	//	if(isset($_POST["texto"]))
			//{
			$dato = $_GET['variable1'];
			// $dato=$_POST["texto"];
			//	if($dato)
     echo "El el rif es: $dato";
				
				$data['consulta'] =	$this->Contratista_model->comprobante($dato);

				$this->load->view('templates/header.php');
				$this->load->view('templates/navigator.php');
				$this->load->view('contratista/comprobante.php',$data);
				$this->load->view('templates/footer.php');
    //redirect('/index.php/Contratista/ver_comprobante',);
			//	else
				//	echo "He recibido un campo vacio";
		//	}//
      }





}
