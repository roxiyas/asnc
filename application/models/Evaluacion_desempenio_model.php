<?php
    class Evaluacion_desempenio_model extends CI_model{

        // public function __construct(){
        //    parent::__construct();
        //    // Este metodo conecta a nuestra segunda conexión
        //    // y asigna a nuestra propiedad $this->db; los recursos de la misma.
        //    $this->db = $this->load->database('SNCenlinea', true);
        // }

       public function consulta_estados(){
           $this->db->select('*');
           $query = $this->db->get('evaluacion_desempenio.estados');
            return $response = $query->result_array();
       }

        public function listar_municipio($data){
            $response = array();
            $this->db->select('*');
            $this->db->where('estado_id', $data['id_estado']);
            $query = $this->db->get('evaluacion_desempenio.municipios');
            $response = $query->result_array();
            return $response;
        }

        public function listar_ciudades($data){
            $response = array();
            $this->db->select('*');
            $this->db->where('estado_id', $data['id_estado']);
            $query = $this->db->get('evaluacion_desempenio.ciudades');
            $response = $query->result_array();
            return $response;
        }

        public function listar_parroquia($data){
            $response = array();
            $this->db->select('*');
            $this->db->where('estado_id', $data['id_municipio']);
            $query = $this->db->get('evaluacion_desempenio.parroquias');
            $response = $query->result_array();
            return $response;
        }

        public function llenar_contratista($data){
            $this->db->select('c.user_id,
                        	     c.edocontratista_id,
                        	     c.rifced,
                        	     c.nombre,
                        	     c.dirfiscal,
                        	     e.descedo,
                        	     m.descmun,
                        	     c.percontacto,
                        	     c.telf1,
                                 c.procactual');
            $this->db->join('evaluacion_desempenio.estados e', 'e.id = c.estado_id');
            $this->db->join('evaluacion_desempenio.municipios m', 'm.id = c.municipio_id');
            $this->db->where('c.rifced',$data['rif_b']);
            $query = $this->db->get('evaluacion_desempenio.contratistas c');
            return $result = $query->row_array();
        }

        public function llenar_contratista_rp($data){
            $this->db->select('proceso_id,
                        	   cedrif,
                               concat(nomacc, \'\' ,apeacc) as repr,
                        	   cargo ');
            $this->db->where('proceso_id', $data['procactual']);
            //$this->db->like('cargo', 'representante');
            $query = $this->db->get('evaluacion_desempenio.accionistas');
            return $result = $query->result_array();
        }

        public function consulta_modalidades(){
            $this->db->select('*');
            $query = $this->db->get('evaluacion_desempenio.modalidad');
            return $result = $query->result_array();
        }

        public function llenar_sub_modalidad($data){
            $this->db->select('*');
            $this->db->where('id_modalidad', $data['id_modalidad']);
            $query = $this->db->get('evaluacion_desempenio.sub_modalidad');
            return $result = $query->result_array();
        }

        public function registrar($exitte,$data,$data_ev){
            $existe = $exitte;

            $quers =$this->db->insert('evaluacion_desempenio.evaluacion', $data_ev);
                if ($existe == 0){
                    $quers1 = $this->db->insert('evaluacion_desempenio.contratistas_nr',$data);
                    return true;
                }

            return $quers;
        }

        public function consulta_eval($usuario){
            $this->db->select('ed.id,
                            	 ed.rif_contrat,
                            	 concat(cn.nombre,\'\',c.nombre ) as nombre,
                                 ed.calificacion
                               ');
            $this->db->join('evaluacion_desempenio.contratistas c', 'c.rifced = ed.rif_contrat', 'left');
            $this->db->join('evaluacion_desempenio.contratistas_nr cn', 'cn.rifced = ed.rif_contrat', 'left');
            $this->db->where('ed.id_usuario', $usuario);
            $query = $this->db->get('evaluacion_desempenio.evaluacion ed');
            return $response = $query->result_array();
        }

        //Se consulta la Evaluación de desempeño. Tomando en cuenta que hay dos tablas de consultas de los contratistas (Solicitado de esa forma).
        public function consulta_eval_ind($id_evaluacion){
            $this->db->select('ed.id,
                                 ed.rif_contrat,
                                 concat(cn.nombre,\'\',c.nombre) as nom_comer,
                                 concat(e2.descedo,\'\', e3.descedo) as est_contratista,
                                 concat(m.descmun,\'\', m2.descmun) as mun_contratista,
                                 concat(c.ciudade_id,\'\', cn.ciudade_id) as ciudade_id,
                                 concat(c.percontacto,\'\', cn.percontacto) as per_cont,
                                 concat(c.telf1,\'\', cn.telf1) as tef_cont,
                                 m3.descripcion as modalidad,
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
                            	 ed.fileimagen');
            $this->db->join('evaluacion_desempenio.contratistas_nr cn', 'cn.rifced = ed.rif_contrat', 'left');
            $this->db->join('evaluacion_desempenio.contratistas c', 'c.rifced = ed.rif_contrat', 'left');
            $this->db->join('evaluacion_desempenio.estados e', 'e.id = ed.id_estado_contrato');
            $this->db->join('evaluacion_desempenio.estados e2', 'e2.id = c.estado_id', 'left');
            $this->db->join('evaluacion_desempenio.estados e3', 'e3.id = cn.estado_id', 'left');
            $this->db->join('evaluacion_desempenio.municipios m', 'm.id = c.municipio_id', 'left');
            $this->db->join('evaluacion_desempenio.municipios m2', 'm2.id = cn.municipio_id', 'left');
            $this->db->join('evaluacion_desempenio.modalidad m3', 'm3.id = ed.id_modalidad');
            $this->db->join('evaluacion_desempenio.sub_modalidad sm', 'sm.id = ed.id_sub_modalidad');
            $this->db->where('ed.id', $id_evaluacion);
            $query = $this->db->get('evaluacion_desempenio.evaluacion ed');
            return $response = $query->row_array();
        }
    }
?>
