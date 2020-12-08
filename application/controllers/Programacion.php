<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programacion extends CI_Controller {

        public function index(){

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
}
