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
}
