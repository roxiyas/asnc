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

        public function save_programacion($aData,$proyecto,$proyecto_financ){
            $quers =$this->db->insert('programacion',$aData);

            if ($quers) {
                $id = $this->db->insert_id();

                    $cant_proy = $proyecto['id_actividad_comercial'];
                    $count_prog = count($cant_proy);
                    for ($i=0; $i < $count_prog; $i++) {
                        $data1 = array(
                            'id_programacion'           => $id,
                            'id_obj_comercial'          => $proyecto['id_actividad_comercial'][$i],
                            'id_ccnu'                   => $proyecto['id_ccnu'][$i],
                            'especificacion'            => $proyecto['especificacion'][$i],
                            'id_unidad_medida'          => $proyecto['id_unidad_medida'][$i],
                            'i'                         => $proyecto['i'][$i],
                            'ii'                        => $proyecto['ii'][$i],
                            'iii'                       => $proyecto['iii'][$i],
                            'iv'                        => $proyecto['iv'][$i],
                            'costo_unitario'            => $proyecto['costo_unitario'][$i],
                            'precio_total'              => $proyecto['precio_total'][$i],
                            'alicuota_iva'           => $proyecto['id_alicuota_iva'][$i],
                            'monto_iva_estimado'        => $proyecto['iva_estimado'][$i],
                            'monto_total_estimado'      => $proyecto['monto_estimado'][$i],
                        );
                        $this->db->insert('public.proyecto',$data1);
                    }

                    $cant_pff = $proyecto_financ['id_par_presupuestaria'];
                    $count_pff = count($cant_pff);

                    for ($i=0; $i < $count_pff; $i++) {

                        $data2 = array(
                            'id_programacion'            => $id,
                            'id_partidad_presupuestaria' => $proyecto_financ['id_par_presupuestaria'][$i],
                            'id_fuente_financiamiento'   => $proyecto_financ['id_fuente_financiamiento'][$i],
                            'porcentaje'                 => $proyecto_financ['porcentaje'][$i],
                        );
                        $this->db->insert('public.proyecto_financ',$data2);
                    }
            }
            return true;
        }
    }
?>
