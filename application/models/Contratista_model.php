<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contratista_model extends CI_Model
{

    public function __construct(){
        parent::__construct();
        // Este metodo conecta a nuestra segunda conexión
        // y asigna a nuestra propiedad $this->db_b_b; los recursos de la misma.
        $this->db_b = $this->load->database('SNCenlinea', true);
    }

    public function llenar_contratista($data){
        $this->db_b->select('*');
        $this->db_b->where('rifced',$data['rif_b']);
        $query = $this->db_b->get('public.infcontratista');
        $result = $query->row_array();
            if ($result == '') {
                $this->db_b->select('*');

                $this->db_b->where('rifced',$data['rif_b']);
                $query = $this->db_b->get('public.infcontratista');
                return $result = $query->row_array();
            }else {
                return $result;
            }
    }

    public function consulta_planillaresumen($rifced){
        $this->db_b->select('*');
        $this->db_b->where('rifced', $rifced);
        $query = $this->db_b->get('public.planillapirmera2');
        return $response = $query->row_array();
    }
    public function consulta_planillaresumen2($rif){
        $this->db_b->select('p.rifced, p.proceso_id, r.proceso_id, r.domfiscal, r.objsocial, r.fecduremp_at, r.fecdurjd_at, 
        r.diaciefcal, r.mesciefcal, r.capsusc, r.cappagado');
        $this->db_b->join('public.planillapirmera2 p', 'p.proceso_id = r.proceso_id');
        $this->db_b->where('p.rifced', $rif);
        $this->db_b->order_by("p.proceso_id", "desc");
        $query = $this->db_b->get('public.regmercantiles r');
        return $response = $query->row_array();
    }
    public function consulta_accionistas($rif){
        $this->db_b->select('p.rifced, p.proceso_id, r.proceso_id,  r.apeacc, r.nomacc, r.tipo, r.cedrif, r.edocivil, 
        r.acc, r.jd, r.rl, r.porcacc, r.cargo, r.tipobl');
        $this->db_b->join('public.planillapirmera2 p', 'p.proceso_id = r.proceso_id');
        $this->db_b->where('p.rifced', $rif);
        $this->db_b->order_by("p.proceso_id", "desc");
        $query = $this->db_b->get('public.accionistas r');
        return $response = $query->row_array();
    }
    public function consulta_comisarios($rif){
        $this->db_b->select('p.rifced, p.proceso_id, r.proceso_id, r.cedcom, r.nomcom, r.apecom, r.tipocom, r.cpc, r.fecdurcom_at');
        $this->db_b->join('public.planillapirmera2 p', 'p.proceso_id = r.proceso_id');
        $this->db_b->where('p.rifced', $rif);
        $this->db_b->order_by("p.proceso_id", "desc");
        $query = $this->db_b->get('public.comisarios r');
        return $response = $query->row_array();
    }
   

}
