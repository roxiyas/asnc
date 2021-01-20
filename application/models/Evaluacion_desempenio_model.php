<?php
    class Evaluacion_desempenio_model extends CI_model{

        public function __construct(){
           parent::__construct();
           // Este metodo conecta a nuestra segunda conexión
           // y asigna a nuestra propiedad $this->db_b; los recursos de la misma.
           $this->db_b = $this->load->database('bd_contrata_2', true);
       }

       public function consulta_estados(){
           $this->db_b->select('*');
           $query = $this->db_b->get('estados');
            return $response = $query->result_array();
       }

        public function listar_municipio($data){
            $response = array();
            $this->db_b->select('*');
            $this->db_b->where('estado_id', $data['id_estado']);
            $query = $this->db_b->get('municipios');
            $response = $query->result_array();
            return $response;
        }

        public function listar_parroquia($data){
            $response = array();
            $this->db_b->select('*');
            $this->db_b->where('estado_id', $data['id_municipio']);
            $query = $this->db_b->get('parroquias');
            $response = $query->result_array();
            return $response;
        }

        public function llenar_contratista($data){
            $this->db_b->select('c.user_id,
                        	     c.edocontratista_id,
                        	     c.rifced,
                        	     c.nombre,
                        	     c.dirfiscal,
                        	     e.descedo,
                        	     m.descmun,
                        	     c.percontacto,
                        	     c.telf1,
                                 c.procactual');
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
            $this->db_b->where('proceso_id', $data['procactual']);
            //$this->db_b->like('cargo', 'representante');
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

        public function registrar($exitte,$data,$data_ev){
            $existe = $exitte;

            $quers =$this->db_b->insert('evaluacion_desempenio', $data_ev);
                if ($existe == 0){
                    $quers1 = $this->db_b->insert('contratistas_nr',$data);
                    return true;
                }

            return $quers;
        }

        public function consulta_eval($usuario){
            $this->db_b->select('ed.id,
                        	     ed.rif_contrat,
                        	     c.nombre,
                        	     ed.calificacion
                               ');
            $this->db_b->join('contratistas c', 'c.rifced = ed.rif_contrat');
            $this->db_b->where('ed.id_usuario', $usuario);
            $query = $this->db_b->get('evaluacion_desempenio ed');
            return $response = $query->result_array();
        }

        public function consulta_eval_ind($id_evaluacion){
            $this->db_b->select('ed.id,
                        	   ed.rif_contrat,
                        	   c.nombre as nom_comer,
                        	   e2.descedo as est_contratista,
                        	   m.descmun as mun_contratista,
                        	   c.ciudade_id,
                        	   c.percontacto per_cont,
                        	   c.telf1 tef_cont,
                        	   m2.descripcion as modalidad,
                        	   sm.descripcion as sub_modalidad,
                        	   ed.fec_inicio_cont,
                        	   ed.fec_fin_cont,
                        	   ed.nro_procedimiento,
                        	   ed.nro_contrato,
                        	   e.descedo as estado_contrato,
                        	   ed.descr_contrato,
                        	   ed.bienes,
                        	   ed.servicios,
                        	   ed.obras,
                        	   ed.monto,
                        	   ed.dolar,
                        	   ed.euro,
                        	   ed.petros,
                        	   ed.bolivares,
                               ed.calidad,
                               ed.responsabilidad,
                               ed.conocimiento,
                               ed.oportunidad,
                        	   ed.total_calif,
                        	   ed.calificacion,
                        	   ed.notf_cont,
                        	   ed.fecha_not,
                        	   ed.medio,
                        	   ed.nro_oc_os,
                        	   ed.fileimagen ');
            $this->db_b->join('contratistas c', 'c.rifced = ed.rif_contrat');
            $this->db_b->join('estados e', 'e.id = ed.id_estado_contrato');
            $this->db_b->join('estados e2', 'e2.id = c.estado_id');
            $this->db_b->join('municipios m', 'm.id = c.municipio_id');
            $this->db_b->join('modalidad m2', 'm2.id = ed.id_modalidad');
            $this->db_b->join('sub_modalidad sm', 'sm.id = ed.id_sub_modalidad');
            $this->db_b->where('ed.id', $id_evaluacion);
            $query = $this->db_b->get('evaluacion_desempenio ed ');
            return $response = $query->row_array();

        }
    }
?>
