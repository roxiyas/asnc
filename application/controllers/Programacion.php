<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programacion extends CI_Controller {

    public function index(){
        if(!$this->session->userdata('session'))
		redirect('login');

        $data['part_pres'] = $this->Programacion_model->consulta_part_pres();
        $data['fuente'] = $this->Programacion_model->consulta_fuente();
        $data['act_com'] = $this->Programacion_model->consulta_act_com();
        $data['ccnu'] = $this->Programacion_model->consulta_cnnu();
        $data['estados'] 	= $this->Configuracion_model->consulta_estados();
        $data['unid'] 	= $this->Programacion_model->consulta_unid();
        $data['iva'] 	= $this->Programacion_model->consulta_iva();

        $this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
        $this->load->view('programacion/add.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function save_programacion(){
        if(!$this->session->userdata('session'))
        redirect('login');

        $aData = array(
			'nombre_programacion'  => $this->input->POST('nombre_proyecto'),
            'id_estado'   		   => $this->input->POST('id_estado'),
            'fecha_desde'   	   => $this->input->POST('fecha_desde'),
            'fecha_hasta'   	   => $this->input->POST('fecha_hasta'),
            'unidad'   		       => $this->session->userdata('id_unidad'),
            'id_usuario' 		   => $this->session->userdata('id_user'),
            'estatus'              => 1
	   );

        $proyecto = array(
			'id_actividad_comercial' => $this->input->post('actividad_comercial'),
			'id_ccnu' 		         => $this->input->post('id_ccnu'),
			'especificacion' 		 => $this->input->post('especificacion'),
            'id_unidad_medida' 		 => $this->input->post('id_unidad_medida'),
            'i' 		             => $this->input->post('i'),
            'ii' 		             => $this->input->post('ii'),
            'iii' 		             => $this->input->post('iii'),
            'iv' 		             => $this->input->post('iv'),
            'costo_unitario' 	     => $this->input->post('costo_unitario'),
            'precio_total' 		     => $this->input->post('precio_total'),
            'id_alicuota_iva' 		 => $this->input->post('id_alicuota_iva'),
            'iva_estimado' 		     => $this->input->post('iva_estimado'),
            'monto_estimado' 		 => $this->input->post('monto_estimado'),
		);

        $proyecto_financ = array(
            'id_par_presupuestaria' 	=> $this->input->post('par_presupuestaria'),
            'id_fuente_financiamiento' => $this->input->post('fuente_financiamiento'),
            'porcentaje' 	        => $this->input->post('porcentaje')
        );

        $data = $this->Programacion_model->save_programacion($aData,$proyecto,$proyecto_financ);

        $this->session->set_flashdata('sa-success2', 'Se guardo los datos correctamente');
		redirect('programacion/index');
    }
}
