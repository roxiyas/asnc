<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contratista_model extends CI_Model
{

    public function llenar_contratista($data){
        $this->db->select('*');
       
      
        $this->db->where('rifced',$data['rif_b']);
        $query = $this->db->get('evaluacion_desempenio.infcontratista');
        $result = $query->row_array();
            if ($result == '') {
                $this->db->select('*');
               
                $this->db->where('rifced',$data['rif_b']);
                $query = $this->db->get('evaluacion_desempenio.infcontratista');
                return $result = $query->row_array();
            }else {
                return $result;
            }
    }
}
