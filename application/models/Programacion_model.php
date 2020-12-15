<?php
    class Programacion_model extends CI_model{

        // PROYECTO
        public function consultar_proyectos($unidad){
            $this->db->select('id_programacion, nombre_programacion, fecha');
            $this->db->where('unidad', $unidad);
            $this->db->where('id_accion_centralizada', 0);
            $query = $this->db->get('programacion');
            return $query->result_array();
        }

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
            $this->db->where('id_objeto_contrata !=', 1);
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

                    $cant_proy = $proyecto['id_ccnu'];
                    $count_prog = count($cant_proy);
                    for ($i=0; $i < $count_prog; $i++) {
                        $data1 = array(
                            'id_programacion'           => $id,
                            'id_partidad_presupuestaria' => $proyecto['id_par_presupuestaria'][$i],
                            'id_ccnu'                   => $proyecto['id_ccnu'][$i],
                            'fecha_desde'               => $proyecto['fecha_desde'][$i],
                            'fecha_hasta'               => $proyecto['fecha_hasta'][$i],
                            'especificacion'            => $proyecto['especificacion'][$i],
                            'id_unidad_medida'          => $proyecto['id_unidad_medida'][$i],
                            'i'                         => $proyecto['i'][$i],
                            'ii'                        => $proyecto['ii'][$i],
                            'iii'                       => $proyecto['iii'][$i],
                            'iv'                        => $proyecto['iv'][$i],
                            'costo_unitario'            => 0,
                            'precio_total'              => $proyecto['precio_total'][$i],
                            'alicuota_iva'              => $proyecto['id_alicuota_iva'][$i],
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
                            'id_estado'                  => $proyecto_financ['id_estado'][$i],
                            'id_partidad_presupuestaria' => $proyecto_financ['id_par_presupuestaria'][$i],
                            'id_fuente_financiamiento'   => $proyecto_financ['id_fuente_financiamiento'][$i],
                            'porcentaje'                 => $proyecto_financ['porcentaje'][$i],
                        );
                        $this->db->insert('public.proyecto_financ',$data2);
                    }
            }
            return true;
        }

        public function inf_1($id_programacion){
            $this->db->select('p.nombre_programacion,
                        	   oc.desc_objeto_contrata,
                        	   p.fecha');
            $this->db->join('objeto_contrata oc','oc.id_objeto_contrata = p.id_obj_comercial');
            $this->db->where('p.id_programacion', $id_programacion);
            $query = $this->db->get('programacion p ');
            return $query->result_array();
        }

        public function inf_2($id_programacion){
            $this->db->select('pp.codigopartida_presupuestaria,
                               pp.desc_partida_presupuestaria,
                        	   pf.id_estado,
                        	   ff.desc_fuente_financiamiento,
                        	   pf.porcentaje');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = pf.id_partidad_presupuestaria');
            $this->db->join('fuente_financiamiento ff','ff.id_fuente_financiamiento = pf.id_fuente_financiamiento ');
            $this->db->where('pf.id_programacion', $id_programacion);
            $query = $this->db->get('proyecto_financ pf');
            return $query->result_array();
        }

        public function inf_3($id_programacion){
            $this->db->select('pp.codigopartida_presupuestaria,
                        	   c2.desc_ccnu,
                        	   p.fecha_desde,
                        	   p.fecha_hasta,
                        	   p.especificacion,
                        	   um.desc_unidad_medida,
                        	   p.i,
                        	   p.ii,
                        	   p.iii,
                        	   p.iv,
                        	   p.precio_total,
                        	   p.alicuota_iva,
                        	   p.monto_iva_estimado,
                        	   p.monto_total_estimado');
            $this->db->join('ccnu c2','c2.codigo_ccnu = p.id_ccnu');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = p.id_partidad_presupuestaria ');
            $this->db->join('unidad_medida um','um.id_unidad_medida = p.id_unidad_medida ');
            $this->db->where('p.id_programacion', $id_programacion);
            $query = $this->db->get('proyecto p');
            return $query->result_array();
        }
        // ACCION CENTRALIZADA

        public function consultar_acc_centralizada($unidad){
            $this->db->select('p.id_programacion,
                               p.fecha,
                        	   p.id_accion_centralizada,
                        	   ac.desc_accion_centralizada ');
            $this->db->join('accion_centralizada ac', 'ac.id_accion_centralizada = p.id_accion_centralizada');
            $this->db->where('p.unidad', $unidad);
            $this->db->where('p.id_accion_centralizada !=', 0);
            $query = $this->db->get('programacion p');
            return $query->result_array();
        }

        public function consulta_act_com2(){
            $this->db->select('*');
            $this->db->where('id_objeto_contrata', 1);
            $query = $this->db->get('objeto_contrata');
            return $result = $query->result_array();
        }

        public function accion_centralizada(){
            $this->db->select('*');
            $query = $this->db->get('accion_centralizada');
            return $result = $query->result_array();
        }

        public function save_programacion_acc($aData,$proyecto,$proyecto_financ){
            $quers =$this->db->insert('programacion',$aData);

            if ($quers) {
                $id = $this->db->insert_id();

                    $cant_proy = $proyecto['id_ccnu'];
                    $count_prog = count($cant_proy);
                    for ($i=0; $i < $count_prog; $i++) {
                        $data1 = array(
                            'id_programacion'           => $id,
                            'id_partidad_presupuestaria' => $proyecto['id_par_presupuestaria'][$i],
                            'id_ccnu'                   => $proyecto['id_ccnu'][$i],
                            'fecha_desde'               => $proyecto['fecha_desde'],
                            'fecha_hasta'               => $proyecto['fecha_hasta'],
                            'especificacion'            => $proyecto['especificacion'][$i],
                            'id_unidad_medida'          => $proyecto['id_unidad_medida'][$i],
                            'i'                         => $proyecto['i'][$i],
                            'ii'                        => $proyecto['ii'][$i],
                            'iii'                       => $proyecto['iii'][$i],
                            'iv'                        => $proyecto['iv'][$i],
                            'costo_unitario'            => $proyecto['costo_unitario'][$i],
                            'precio_total'              => $proyecto['precio_total'][$i],
                            'alicuota_iva'              => $proyecto['id_alicuota_iva'][$i],
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
                            'id_estado'                  => $proyecto_financ['id_estado'][$i],
                            'id_partidad_presupuestaria' => $proyecto_financ['id_par_presupuestaria'][$i],
                            'id_fuente_financiamiento'   => $proyecto_financ['id_fuente_financiamiento'][$i],
                            'porcentaje'                 => $proyecto_financ['porcentaje'][$i],
                        );
                        $this->db->insert('public.proyecto_financ',$data2);
                    }
            }
            return true;
        }

        public function inf_1_acc($id_programacion){
            $this->db->select('oc.desc_objeto_contrata,
                        	   ac.desc_accion_centralizada,
                        	   p.fecha');
            $this->db->join('objeto_contrata oc','oc.id_objeto_contrata = p.id_obj_comercial');
            $this->db->join('accion_centralizada ac','ac.id_accion_centralizada = p.id_accion_centralizada ');
            $this->db->where('p.id_programacion', $id_programacion);
            $query = $this->db->get('programacion p ');
            return $query->result_array();
        }

        public function inf_3_acc($id_programacion){
            $this->db->select('pp.codigopartida_presupuestaria,
                        	   c2.desc_ccnu,
                        	   p.especificacion,
                        	   um.desc_unidad_medida,
                        	   p.i,
                        	   p.ii,
                        	   p.iii,
                        	   p.iv,
                        	   p.costo_unitario,
                        	   p.precio_total,
                        	   p.alicuota_iva,
                        	   p.monto_iva_estimado,
                        	   p.monto_total_estimado');
            $this->db->join('ccnu c2','c2.codigo_ccnu = p.id_ccnu');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = p.id_partidad_presupuestaria ');
            $this->db->join('unidad_medida um','um.id_unidad_medida = p.id_unidad_medida ');
            $this->db->where('p.id_programacion', $id_programacion);
            $query = $this->db->get('proyecto p');
            return $query->result_array();
        }
    }
?>
