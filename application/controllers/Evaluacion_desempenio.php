<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluacion_desempenio extends CI_Controller {

	public function index(){
		if(!$this->session->userdata('session'))redirect('login');
		$data['estados'] 	 = $this->Configuracion_model->consulta_estados();
		$data['pais'] 		 = $this->Configuracion_model->consulta_paises();
		$data['edo_civil'] 		 = $this->Configuracion_model->consulta_edo_civil();
		$data['operadora'] 		 = $this->Evaluacion_desempenio_model->consulta_operadora();
		$data['modalidades'] = $this->Evaluacion_desempenio_model->consulta_modalidades();
		$data['med_not'] = $this->Evaluacion_desempenio_model->consulta_med_notf();

        $this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
		$this->load->view('evaluacion_desempenio/registro.php', $data);
        $this->load->view('templates/footer.php');
	}

	//Registro de Evaluacion Desempenio
	public function listar_municipio(){

		if(!$this->session->userdata('session'))redirect('login');
		$data = $this->input->post();
		$data =	$this->Configuracion_model->listar_municipio($data);
		echo json_encode($data);
	}

	public function listar_parroquia(){
		if(!$this->session->userdata('session'))redirect('login');
		$data = $this->input->post();
		$data =	$this->Configuracion_model->listar_parroquia($data);
		echo json_encode($data);
	}

	public function listar_ciudades(){
		if(!$this->session->userdata('session'))redirect('login');
		$data = $this->input->post();
		$data =	$this->Configuracion_model->listar_ciudades($data);
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
			'user_id' 			 =>  0,
			'edocontratista_id'  => 1,
			'objcontratista_id'  => 0,
			'nivelfinanciero_id' => 0,
			'racoficina_id' 	 => 0,
			'tipocontratista' 	 => 0,
			'estado_id' 		 => $this->input->POST('id_estado_n'),
			'ciudade_id' 		 => $this->input->POST('ciudad_n'),
			'municipio_id' 		 => $this->input->POST('id_municipio_n'),
			'parroquia_id' 		 => $this->input->POST('id_parroquia_n'),
			'rifced' 			 => $rif_contrat,
			'nombre' 			 => $this->input->POST('nombre_n'),
			'tipopersona' 		 => 0, //tipo de rif
			'dencomerciale_id' 	 => 0,
			'ultprocaprob' 		 =>0,
			'procactual' 		 => 0,
			'dirfiscal' 		 => 'no',
			'percontacto' 		 => 'N/A',
			'telf1' 		  	 => 'N/A',
			'fecactsusc_at' 	 =>  '2020-01-01',
			'fecvencsusc_at' 	 => '2020-01-01',
			'fecinscrnc_at'	     => '2020-01-01',
			'fecvencrnc_at' 	 => '2020-01-01',
			'numcertrnc' 	     => '0',
			'numcontrol_certrnc' => '0',
			'contimp_certrnc'    => '0',
			'contimp_copiarnc'   => '0',
			'codedocont' 		 => '0',
			'loginant' 			 => '0',
			'fecvencrechazo_at'  => '2020-01-01',
			'recibido' 			 => '0'
		);

		$data_repr_legal= array(
				'rif_contratista' => $rif_contrat,
				'paise_id' 		  => $this->input->POST('id_pais_n'),
				'apeacc' 		  => $this->input->POST('ape_rep_leg_n'),
				'nomacc' 		  => $this->input->POST('nom_rep_leg_n'),
				'tipo' 			  => '',
				'cedrif' 		  => $this->input->POST('ced_rep_leg_n'),
				'edocivil' 		  => $this->input->POST('ced_rep_leg_n'),
				'acc' 			  => '0',
				'jd' 			  => '0',
				'rl' 			  => '0',
				'porcacc' 		  => '0',
				'cargo' 		  => $this->input->POST('cargo_rep_leg_n'),
				'tipobl' 		  => '',
				'id_operadora' 	  => $this->input->POST('operadora_n'),
				'telf' 		      => $this->input->POST('numero_n'),
				'correo' 		  => $this->input->POST('correo_rep_leg_n')
		);

		$data_ev = array('rif_contrat' 			=> $rif_contrat,
						 'id_modalidad' 		=> $this->input->POST('id_modalidad'),
						 'id_sub_modalidad' 	=> $this->input->POST('id_sub_modalidad'),
					 	 'fec_inicio_cont'	 	=> $this->input->POST('start'),
				 	     'fec_fin_cont' 		=> $this->input->POST('end'),
					 	 'nro_procedimiento' 	=> $this->input->POST('nro_procedimiento'),
					 	 'nro_contrato' 		=> $this->input->POST('nro_cont_oc_os'),
					 	 'id_estado_contrato' 	=> $this->input->POST('id_estado_dc'),
				 		 'bienes' 				=> $this->input->POST('cssCheckbox1'),
						 'servicios' 			=> $this->input->POST('cssCheckbox2'),
						 'obras' 				=> $this->input->POST('cssCheckbox3'),
						 'descr_contrato' 		=> $this->input->POST('desc_contratacion'),
						 'monto' 				=> $this->input->POST('monto'),
						 'dolar' 				=> $this->input->POST('cssRadio1'),
						 'euro' 				=> $this->input->POST('cssRadio2'),
						 'petros' 				=> $this->input->POST('cssRadio3'),
						 'bolivares' 			=> $this->input->POST('cssRadio4'),
						 'calidad' 				=> $this->input->POST('calidad'),
						 'responsabilidad' 		=> $this->input->POST('responsabilidad'),
						 'conocimiento' 		=> $this->input->POST('conocimiento'),
						 'oportunidad' 			=> $this->input->POST('oportunidad'),
						 'total_calif' 			=> $this->input->POST('total_claf'),
						 'calificacion' 		=> $this->input->POST('calificacion'),
						 'id_usuario' 			=> $this->session->userdata('id_user'),
						 'id_estatus'			=> 1
		);

		$data =	$this->Evaluacion_desempenio_model->registrar($exitte,$data,$data_ev,$data_repr_legal);
		echo json_encode($data);
	}

	// NOTIFICACIÖN DE EVALUACION AL CONTRATISTA
	public function notificacion(){
		if(!$this->session->userdata('session'))redirect('login');

        $this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
		$this->load->view('evaluacion_desempenio/notificacion.php');
        $this->load->view('templates/footer.php');
	}

	public function registrar_not_m(){

		$medio = $this->input->POST('medio');
		if ($medio == '1' || $medio == '4') {
			if (!empty($_FILES['fileImagen']['name'])){
				$config['upload_path'] = './imagenes';;
				$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
				$config['max_size'] = '204800';
				$config['max_width'] = '202400';
				$config['max_height'] = '200800';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('fileImagen')){
					$img = $this->upload->data();
				}else{
					$img = 'N/A';
					echo $this->upload->display_errors();
				}
			}
			if(!isset($img['file_name'])){$img['file_name'] = "";}

			$file_img = $img['file_name'];
		}else {
			$file_img = 'NULL';
		}

		$data = array('id_evaluacion'=> $this->input->POST('id'),
	 				  'medio' 		 => $this->input->POST('medio'),
				  	  'nro_not' 	 => $this->input->POST('nro_not'),
				  	  'correo' 	 	 => $this->input->POST('correo'),
				  	  'fileimagen' 	 => $file_img,
					  'id_usuario' 	 => $this->session->userdata('id_user'),
					  'id_estatus'	 => 2);

		$data =	$this->Evaluacion_desempenio_model->registrar_not($data);
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

		// $img = $data['eval_ind']['fileimagen'];
		// $separar  = explode(".", $img);
		// $data['tipo_img'] = $separar['1'];

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

	public function graficos(){
		if(!$this->session->userdata('session'))redirect('login');
		$data = $this->input->post();
		$data =	$this->Evaluacion_desempenio_model->graficos($data);
		echo json_encode($data);
	}
}
