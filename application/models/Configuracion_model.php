<?php
    class Configuracion_model extends CI_model{
        public function consulta_tipo_rif(){
            $this->db->select('*');
            $query = $this->db->get('tipo_rif');
            return $result = $query->result_array();
        }

        public function consulta_estados(){
            $this->db->select('*');
            $this->db->order_by('descripcion asc');
            $query = $this->db->get('estados');
            return $result = $query->result_array();
        }

        public function listar_municipio($data){
            $response = array();
            $this->db->select('*');
            $this->db->where('id_estado', $data['id_estado']);
            $this->db->order_by('municipios.descripcion asc');
            $query = $this->db->get('municipios');
            $response = $query->result_array();
            return $response;
       }

        public function listar_parroquia($data){
            $response = array();
            $this->db->select('*');
            $this->db->where('id_municipio', $data['id_municipio']);
            $this->db->order_by('parroquias.descripcion asc');
            $query = $this->db->get('parroquias');
            $response = $query->result_array();
            return $response;
        }
    }


?>
