<?php
    class Evaluacion_desempenio_model extends CI_model{

        public function __construct(){
           parent::__construct();
           // Este metodo conecta a nuestra segunda conexión
           // y asigna a nuestra propiedad $this->db_b; los recursos de la misma.
           $this->db_b = $this->load->database('bd_contrata_2', true);
       }

        public function llenar_contratista($data){
            $this->db_b->select('c.user_id,
                            	   c.edocontratista_id,
                            	   c.rifced,
                            	   c.nombre,
                            	   c.dirfiscal,
                            	   c.estado_id,
                            	   c.municipio_id,
                            	   m.descmun,
                            	   e.descedo');
            $this->db_b->join('estados e', 'e.id = c.estado_id');
            $this->db_b->join('municipios m', 'm.id = c.municipio_id');
            $this->db_b->where('c.rifced',$data['rif_b']);
            $query = $this->db_b->get('contratistas c');
            return $result = $query->row_array();
        }

        public function llenar_contratista_rp($data){
            $this->db_b->select('proceso_id,
                        	   cedrif,
                               concat(nomacc, \'\' ,apeacc) as repr,
                        	   cargo ');
            $this->db_b->where('proceso_id', $data['user_id']);
            $this->db_b->like('cargo', 'representante');
            $query = $this->db_b->get('accionistas');
            return $result = $query->result_array();
        }

        public function consulta_modalidades(){
            $this->db_b->select('*');
            $query = $this->db_b->get('modalidad');
            return $result = $query->result_array();
        }

        public function llenar_sub_modalidad($data){
            $this->db_b->select('*');
            $this->db_b->where('id_modalidad', $data['id_modalidad']);
            $query = $this->db_b->get('sub_modalidad');
            return $result = $query->result_array();
        }
    }
?>
