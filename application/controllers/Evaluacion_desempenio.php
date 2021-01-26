<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluacion_desempenio extends CI_Controller {

	public function index(){
		if(!$this->session->userdata('session'))redirect('login');
		$data['estados'] 	= $this->Evaluacion_desempenio_model->consulta_estados();
		$data['modalidades'] 	= $this->Evaluacion_desempenio_model->consulta_modalidades();

        $this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
		$this->load->view('evaluacion_desempenio/registro.php', $data);
        $this->load->view('templates/footer.php');
	}

	//Registro de Evaluacion Desempenio
	public function listar_municipio(){

		if(!$this->session->userdata('session'))redirect('login');
		$data = $this->input->post();
		$data =	$this->Evaluacion_desempenio_model->listar_municipio($data);
		echo json_encode($data);
	}

	public function listar_parroquia(){
		if(!$this->session->userdata('session'))redirect('login');
		$data = $this->input->post();
		$data =	$this->Evaluacion_desempenio_model->listar_parroquia($data);
		echo json_encode($data);
	}

	//Consulta si existe el contrastis
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
		if(!$this->session->userdata('session'))redirect('login');

		//los datos se traen de la vista Evaluación Desempeño medianto el js(AJAX)

		$rif_cont = $this->input->POST('rif_cont');
		$rif_cont_n = $this->input->POST('rif_cont_n');

		$exitte = $this->input->POST('exitte');

		if ($rif_cont == '') {
			$rif_contrat = $rif_cont_n;
		}else {
			$rif_contrat = $rif_cont;
		}

		$data = array(
			'user_id' =>  0,
			'edocontratista_id' => 1,
			'objcontratista_id' => 0,
			'nivelfinanciero_id'  => 0,
			'racoficina_id' => 0,
			'tipocontratista' => 0,
			'estado_id' => $this->input->POST('id_estado_n'),
			'ciudade_id' => $this->input->POST('ciudad_n'),
			'municipio_id' => $this->input->POST('id_municipio_n'),
			'parroquia_id' => $this->input->POST('id_parroquia_n'),
			'rifced' => $rif_contrat,
			'nombre' => $this->input->POST('nombre_n'),
			'tipopersona' => 0, //tipo de rif
			'dencomerciale_id' => 0,
			'ultprocaprob' =>0,
			'procactual' => 0,
			'dirfiscal' => 'no',
			'percontacto' => $this->input->POST('persona_cont_n'),
			'telf1' => $this->input->POST('tel_cont_n'),
			'fecactsusc_at' =>  '2020-01-01',
			'fecvencsusc_at' => '2020-01-01',
			'fecinscrnc_at' => '2020-01-01',
			'fecvencrnc_at' => '2020-01-01',
			'numcertrnc' => '0',
			'numcontrol_certrnc' => '0',
			'contimp_certrnc' => '0',
			'contimp_copiarnc' => '0',
			'codedocont' => '0',
			'loginant' => '0',
			'fecvencrechazo_at' => '2020-01-01',
			'recibido' => '0'
		);

		if (!empty($_FILES['fileImagen']['name'])){
			$config['upload_path'] = './imagenes';;
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('fileImagen')){
				$img = $this->upload->data();
			}else{
				$img = 'N/A';
				//echo $this->upload->display_errors();
			}
		}

		$data_ev = array('rif_contrat' => $rif_contrat,
						 'id_modalidad' => $this->input->POST('id_modalidad'),
						 'id_sub_modalidad' => $this->input->POST('id_sub_modalidad'),
					 	 'fec_inicio_cont' => $this->input->POST('start'),
				 	     'fec_fin_cont' => $this->input->POST('end'),
					 	 'nro_procedimiento' => $this->input->POST('nro_procedimiento'),
					 	 'nro_contrato' => $this->input->POST('nro_cont_oc_os'),
					 	 'id_estado_contrato' => $this->input->POST('id_estado_dc'),
				 		 'bienes' => $this->input->POST('cssCheckbox1'),
						 'servicios' => $this->input->POST('cssCheckbox2'),
						 'obras' => $this->input->POST('cssCheckbox3'),
						 'descr_contrato' => $this->input->POST('desc_contratacion'),
						 'monto' => $this->input->POST('monto'),
						 'dolar' => $this->input->POST('cssCheckbox1'),
						 'euro' => $this->input->POST('cssCheckbox2'),
						 'petros' => $this->input->POST('cssCheckbox3'),
						 'bolivares' => $this->input->POST('cssCheckbox3'),
						 'calidad' => $this->input->POST('calidad'),
						 'responsabilidad' => $this->input->POST('responsabilidad'),
						 'conocimiento' => $this->input->POST('conocimiento'),
						 'oportunidad' => $this->input->POST('oportunidad'),
						 'total_calif' => $this->input->POST('total_claf'),
						 'calificacion' => $this->input->POST('calificacion'),
						 'notf_cont' => $this->input->POST('notf_cont'),
					 	 'fecha_not' => $this->input->POST('fec_notificacion'),
				 	  	 'medio' => $this->input->POST('medio'),
			 		 	 'nro_oc_os' => $this->input->POST('nro_oc_os'),
		 			 	 'fileimagen' =>  $img['file_name'],
						 'id_usuario' 	=> $this->session->userdata('id_user')
					);
		$data =	$this->Evaluacion_desempenio_model->registrar($exitte,$data,$data_ev);
		echo json_encode($data);
	}

	//Para consultar las evaluaciones que tiene el usuarios registradas
	public function reporte(){
		if(!$this->session->userdata('session'))redirect('login');

		$usuario = $this->session->userdata('id_user');
		$data['reportes'] 	= $this->Evaluacion_desempenio_model->consulta_eval($usuario);

		$this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
		$this->load->view('evaluacion_desempenio/reporte.php', $data);
        $this->load->view('templates/footer.php');
	}

	public function ver_evaluacion(){
		$id_evaluacion = $this->input->get('id');
		$data['eval_ind'] 	= $this->Evaluacion_desempenio_model->consulta_eval_ind($id_evaluacion);
		$this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
		$this->load->view('evaluacion_desempenio/pdf_eval.php', $data);
        $this->load->view('templates/footer.php');
	}

	//Para La Consulta de Gráficos
	public function consulta(){
		$this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
		$this->load->view('evaluacion_desempenio/consulta.php');
        $this->load->view('templates/footer_g.php');
	}
}
