<?php
    class Programacion_model extends CI_model{

        public function consulta_part_pres(){
            $this->db->select('*');
            $query = $this->db->get('partida_presupuestaria');
            return $result = $query->result_array();
        }

        public function consulta_fuente(){
            $this->db->select('*');
            $query = $this->db->get('fuente_financiamiento');
            return $result = $query->result_array();
        }

        public function consulta_act_com(){
            $this->db->select('*');
            $query = $this->db->get('objeto_contrata');
            return $result = $query->result_array();
        }

        public function consulta_cnnu(){
            $this->db->select('*');
            $query = $this->db->get('ccnu');
            return $result = $query->result_array();
        }

        public function consulta_unid(){
            $this->db->select('*');
            $query = $this->db->get('unidad_medida');
            return $result = $query->result_array();
        }

        public function consulta_iva(){
            $this->db->select('*');
            $query = $this->db->get('alicuota_iva');
            return $result = $query->result_array();
        }


    }
?>
