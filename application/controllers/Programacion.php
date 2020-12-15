<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programacion extends CI_Controller {

    public function index(){
        if(!$this->session->userdata('session'))
		redirect('login');

        $unidad = $this->session->userdata('id_unidad');

        $data['ver_proyectos'] = $this->Programacion_model->consultar_proyectos($unidad);

        $data['ver_acc_centralizada'] = $this->Programacion_model->consultar_acc_centralizada($unidad);
        $this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
        $this->load->view('programacion/ver.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function add(){
        if(!$this->session->userdata('session'))
        redirect('login');

        $data['unidad'] = $this->session->userdata('id_unidad');
        $data['des_unidad'] = $this->session->userdata('unidad');
        $data['rif'] = $this->session->userdata('rif');
        $data['codigo_onapre'] = $this->session->userdata('codigo_onapre');

        //Proyecto
        $data['part_pres'] = $this->Programacion_model->consulta_part_pres();
        $data['fuente'] = $this->Programacion_model->consulta_fuente();
        $data['act_com'] = $this->Programacion_model->consulta_act_com();
        $data['ccnu'] = $this->Programacion_model->consulta_cnnu();
        $data['estados'] 	= $this->Configuracion_model->consulta_estados();
        $data['unid'] 	= $this->Programacion_model->consulta_unid();
        $data['iva'] 	= $this->Programacion_model->consulta_iva();

        //ACCION CENTRALIZADA
        $data['act_com2'] = $this->Programacion_model->consulta_act_com2();
        $data['acc_cent'] = $this->Programacion_model->accion_centralizada();

        $this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
        $this->load->view('programacion/add.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function save_programacion(){
        if(!$this->session->userdata('session'))
        redirect('login');

        $aData = array(
			'nombre_programacion'    => $this->input->POST('nombre_proyecto'),
            'id_accion_centralizada' => $this->input->POST('id_accion_centralizada'),
            'id_obj_comercial'       => $this->input->post('id_obj_comercial'),
            'unidad'   		         => $this->session->userdata('id_unidad'),
            'id_usuario' 		     => $this->session->userdata('id_user'),
            'estatus'                => 1
	   );

        $proyecto = array(
            'id_par_presupuestaria'  => $this->input->post('par_presupuestaria'),
			'id_ccnu' 		         => $this->input->post('id_ccnu'),
            'fecha_desde'   	     => $this->input->POST('fecha_desde'),
            'fecha_hasta'   	     => $this->input->POST('fecha_hasta'),
			'especificacion' 		 => $this->input->post('especificacion'),
            'id_unidad_medida' 		 => $this->input->post('id_unidad_medida'),
            'i' 		             => $this->input->post('i'),
            'ii' 		             => $this->input->post('ii'),
            'iii' 		             => $this->input->post('iii'),
            'iv' 		             => $this->input->post('iv'),
            'precio_total' 		     => $this->input->post('precio_total'),
            'id_alicuota_iva' 		 => $this->input->post('id_alicuota_iva'),
            'iva_estimado' 		     => $this->input->post('iva_estimado'),
            'monto_estimado' 		 => $this->input->post('monto_estimado'),
		);

        $proyecto_financ = array(
            'id_estado'   		        => $this->input->post('id_estado'),
            'id_par_presupuestaria' 	=> $this->input->post('par_presupuestaria_ff'),
            'id_fuente_financiamiento'  => $this->input->post('fuente_financiamiento'),
            'porcentaje' 	            => $this->input->post('porcentaje'),
        );


        $data = $this->Programacion_model->save_programacion($aData,$proyecto,$proyecto_financ);

        $this->session->set_flashdata('sa-success2', 'Se guardo los datos correctamente');
		redirect('programacion/index');
    }

    public function ver_programacion_proy(){
        if(!$this->session->userdata('session'))
        redirect('login');

        $id_programacion = $this->input->get('id');
        $data['unidad'] = $this->session->userdata('id_unidad');
        $data['des_unidad'] = $this->session->userdata('unidad');
        $data['rif'] = $this->session->userdata('rif');
        $data['codigo_onapre'] = $this->session->userdata('codigo_onapre');

        $data['inf_1'] = $this->Programacion_model->inf_1($id_programacion);
        $data['inf_2'] = $this->Programacion_model->inf_2($id_programacion);
        $data['inf_3'] = $this->Programacion_model->inf_3($id_programacion);

        $this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
        $this->load->view('programacion/pdf_proyecto.php', $data);
        $this->load->view('templates/footer.php');

    }
    // ACCIÓN CENTRALIZADA

    public function save_programacion_acc(){
        if(!$this->session->userdata('session'))
        redirect('login');

        $aData = array(
			'nombre_programacion'    => $this->input->POST('nombre_proyecto_acc'),
            'id_accion_centralizada' => $this->input->POST('id_accion_centralizada_acc'),
            'id_obj_comercial'       => $this->input->post('id_obj_comercial_cc'),
            'unidad'   		         => $this->session->userdata('id_unidad'),
            'id_usuario' 		     => $this->session->userdata('id_user'),
            'estatus'                => 1
	   );


        $proyecto = array(
            'id_par_presupuestaria'  => $this->input->post('par_presupuestaria_acc'),
			'id_ccnu' 		         => $this->input->post('id_ccnu_acc'),
            'fecha_desde'   	     => date('Y-m-d'),
            'fecha_hasta'   	     => date('Y-m-d'),
			'especificacion' 		 => $this->input->post('especificacion_acc'),
            'id_unidad_medida' 		 => $this->input->post('id_unidad_medida_acc'),
            'i' 		             => $this->input->post('i_acc'),
            'ii' 		             => $this->input->post('ii_acc'),
            'iii' 		             => $this->input->post('iii_acc'),
            'iv' 		             => $this->input->post('iv_acc'),
            'costo_unitario' 	     => $this->input->post('costo_unitario_acc'),
            'precio_total' 		     => $this->input->post('precio_total_acc'),
            'id_alicuota_iva' 		 => $this->input->post('id_alicuota_iva_acc'),
            'iva_estimado' 		     => $this->input->post('iva_estimado_acc'),
            'monto_estimado' 		 => $this->input->post('monto_estimado_acc'),
		);

        $proyecto_financ = array(
            'id_estado'   		        => $this->input->post('id_estado_acc'),
            'id_par_presupuestaria' 	=> $this->input->post('par_presupuestaria_acc_ff'),
            'id_fuente_financiamiento'  => $this->input->post('fuente_financiamiento_acc'),
            'porcentaje' 	            => $this->input->post('porcentaje_acc'),
        );


        $data = $this->Programacion_model->save_programacion_acc($aData,$proyecto,$proyecto_financ);

        $this->session->set_flashdata('sa-success2', 'Se guardo los datos correctamente');
		redirect('programacion/index');
    }

    public function ver_programacion_acc(){
        if(!$this->session->userdata('session'))
        redirect('login');

        $id_programacion = $this->input->get('id');
        $data['unidad'] = $this->session->userdata('id_unidad');
        $data['des_unidad'] = $this->session->userdata('unidad');
        $data['rif'] = $this->session->userdata('rif');
        $data['codigo_onapre'] = $this->session->userdata('codigo_onapre');
        $data['inf_1_acc'] = $this->Programacion_model->inf_1_acc($id_programacion);
        $data['inf_2'] = $this->Programacion_model->inf_2($id_programacion);
        $data['inf_3_acc'] = $this->Programacion_model->inf_3_acc($id_programacion);

        $this->load->view('templates/header.php');
        $this->load->view('templates/navigator.php');
        $this->load->view('programacion/pdf_acc.php', $data);
        $this->load->view('templates/footer.php');

    }
}
