<?php
    class Programacion_model extends CI_model{

        // PROGRAMACION

        public function consultar_programaciones($unidad){
            $this->db->select('*');
            $this->db->where('unidad', $unidad);
            $query = $this->db->get('programacion');
            return $query->result_array();
        }

        public function agg_programacion($data){
            $quers =$this->db->insert('programacion',$data);
            return true;
        }

        public function consultar_prog_anio($id_programacion, $unidad){

            $this->db->select('*');
            $this->db->where('unidad', $unidad);
            $this->db->where('id_programacion', $id_programacion);
            $query = $this->db->get('programacion');
            return $query->row_array();
        }

        // PROYECTO

        public function consultar_proyectos($id_programacion){
            $this->db->select('pp.id_p_proyecto,
                               pp.nombre_proyecto,
                        	   pp.id_programacion,
                        	   pp.id_obj_comercial,
                        	   oc.desc_objeto_contrata');
            $this->db->join('objeto_contrata oc', 'oc.id_objeto_contrata = pp.id_obj_comercial');
            $this->db->where('pp.id_programacion', $id_programacion);
            $query = $this->db->get('p_proyecto pp');
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

        public function save_programacion($acc_cargar,$p_proyecto,$p_acc_centralizada,$p_items,$p_ffinanciamiento){

            if ($acc_cargar == '1') {
                $quers =$this->db->insert('p_proyecto',$p_proyecto);

                if ($quers) {
                    $id = $this->db->insert_id();

                        $cant_proy = $p_items['id_ccnu'];
                        $count_prog = count($cant_proy);
                        for ($i=0; $i < $count_prog; $i++) {
                            $data1 = array(
                                'id_enlace'                  => $id,
                                'id_p_acc'                   => 0,
                                'id_partidad_presupuestaria' => $p_items['id_par_presupuestaria'][$i],
                                'id_ccnu'                    => $p_items['id_ccnu'][$i],
                                'fecha_desde'                => $p_items['fecha_desde'][$i],
                                'fecha_hasta'                => $p_items['fecha_hasta'][$i],
                                'especificacion'             => $p_items['especificacion'][$i],
                                'id_unidad_medida'           => $p_items['id_unidad_medida'][$i],
                                'cantidad'                   => 0,
                                'i'                          => $p_items['i'][$i],
                                'ii'                         => $p_items['ii'][$i],
                                'iii'                        => $p_items['iii'][$i],
                                'iv'                         => $p_items['iv'][$i],
                                'costo_unitario'             => 0,
                                'cant_total_distribuir'      => 0,
                                'precio_total'               => $p_items['precio_total'][$i],
                                'alicuota_iva'               => $p_items['id_alicuota_iva'][$i],
                                'iva_estimado'               => $p_items['iva_estimado'][$i],
                                'monto_estimado'             => $p_items['monto_estimado'][$i],
                                'iva_estimado'               => $p_items['iva_estimado'][$i],
                                'monto_estimado'             => $p_items['monto_estimado'][$i],
                            );
                            $this->db->insert('public.p_items',$data1);
                        }

                        $cant_pff = $p_ffinanciamiento['id_par_presupuestaria'];
                        $count_pff = count($cant_pff);

                        for ($i=0; $i < $count_pff; $i++) {

                            $data2 = array(
                                'id_enlace'                  => $id,
                                'id_p_acc'                   => 0,
                                'id_estado'                  => $p_ffinanciamiento['id_estado'][$i],
                                'id_partidad_presupuestaria' => $p_ffinanciamiento['id_par_presupuestaria'][$i],
                                'id_fuente_financiamiento'   => $p_ffinanciamiento['id_fuente_financiamiento'][$i],
                                'porcentaje'                 => $p_ffinanciamiento['porcentaje'][$i],
                            );
                            $this->db->insert('public.p_ffinanciamiento',$data2);
                        }
                }
                return true;
            }elseif ($acc_cargar == '2') {
                $quers =$this->db->insert('p_acc_centralizada',$p_acc_centralizada);

                if ($quers) {
                    $id = $this->db->insert_id();

                        $cant_proy = $p_items['id_ccnu'];
                        $count_prog = count($cant_proy);
                        for ($i=0; $i < $count_prog; $i++) {
                            $data1 = array(
                                'id_enlace'                  => $id,
                                'id_p_acc'                   => 1,
                                'id_partidad_presupuestaria' => $p_items['id_par_presupuestaria'][$i],
                                'id_ccnu'                    => $p_items['id_ccnu'][$i],
                                'fecha_desde'                => $p_items['fecha_desde'][$i],
                                'fecha_hasta'                => $p_items['fecha_hasta'][$i],
                                'especificacion'             => $p_items['especificacion'][$i],
                                'id_unidad_medida'           => $p_items['id_unidad_medida'][$i],
                                'cantidad'                   => 0,
                                'i'                          => $p_items['i'][$i],
                                'ii'                         => $p_items['ii'][$i],
                                'iii'                        => $p_items['iii'][$i],
                                'iv'                         => $p_items['iv'][$i],
                                'cant_total_distribuir'      => 0,
                                'costo_unitario'             => 0,
                                'precio_total'               => $p_items['precio_total'][$i],
                                'alicuota_iva'               => $p_items['id_alicuota_iva'][$i],
                                'iva_estimado'               => $p_items['iva_estimado'][$i],
                                'monto_estimado'             => $p_items['monto_estimado'][$i],
                            );
                            $this->db->insert('public.p_items',$data1);
                        }

                        $cant_pff = $p_ffinanciamiento['id_par_presupuestaria'];
                        $count_pff = count($cant_pff);

                        for ($i=0; $i < $count_pff; $i++) {

                            $data2 = array(
                                'id_enlace'                  => $id,
                                'id_p_acc'                   => 1,
                                'id_estado'                  => $p_ffinanciamiento['id_estado'][$i],
                                'id_partidad_presupuestaria' => $p_ffinanciamiento['id_par_presupuestaria'][$i],
                                'id_fuente_financiamiento'   => $p_ffinanciamiento['id_fuente_financiamiento'][$i],
                                'porcentaje'                 => $p_ffinanciamiento['porcentaje'][$i],
                            );
                            $this->db->insert('public.p_ffinanciamiento',$data2);
                        }
                }
                return true;
            }
        }

        public function inf_1($id_p_proyecto){
            $this->db->select('pp.id_p_proyecto,
                               pp.nombre_proyecto,
                        	   pp.id_programacion,
                        	   pp.id_obj_comercial,
                        	   oc.desc_objeto_contrata');
            $this->db->join('objeto_contrata oc', 'oc.id_objeto_contrata = pp.id_obj_comercial');
            $this->db->where('pp.id_p_proyecto', $id_p_proyecto);
            $query = $this->db->get('p_proyecto pp');
            return $query->result_array();
        }

        public function inf_2($id_p_proyecto){
            $this->db->select('pf.id_enlace,
                        	   pf.id_partidad_presupuestaria,
                        	   pp.desc_partida_presupuestaria,
                               pp.codigopartida_presupuestaria,
                        	   pf.id_estado,
                        	   pf.id_fuente_financiamiento,
                        	   ff.desc_fuente_financiamiento,
                        	   pf.porcentaje ');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = pf.id_partidad_presupuestaria');
            $this->db->join('fuente_financiamiento ff','ff.id_fuente_financiamiento = pf.id_fuente_financiamiento');
            $this->db->where('pf.id_enlace', $id_p_proyecto);
            $this->db->where('pf.id_p_acc', 0);
            $query = $this->db->get('p_ffinanciamiento pf');
            return $query->result_array();
        }

        public function inf_3($id_p_proyecto){
            $this->db->select('pi2.id_p_items,
                        	   pi2.id_enlace,
                               pi2.id_partidad_presupuestaria,
                               pp.desc_partida_presupuestaria,
                               pp.codigopartida_presupuestaria,
                        	   pi2.id_ccnu,
                        	   c2.desc_ccnu,
                        	   pi2.fecha_desde,
                        	   pi2.fecha_hasta,
                        	   pi2.especificacion,
                               pi2.id_unidad_medida,
                        	   um.desc_unidad_medida,
                        	   pi2.i,
                        	   pi2.ii,
                        	   pi2.iii,
                        	   pi2.iv,
                        	   pi2.precio_total,
                        	   pi2.alicuota_iva,
                               pi2.iva_estimado,
                               pi2.monto_estimado');
            $this->db->join('ccnu c2','c2.codigo_ccnu = pi2.id_ccnu');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = pi2.id_partidad_presupuestaria');
            $this->db->join('unidad_medida um','um.id_unidad_medida = pi2.id_unidad_medida');
            $this->db->where('pi2.id_enlace', $id_p_proyecto);
            $this->db->where('pi2.id_p_acc', 0);
            $query = $this->db->get('p_items pi2');
            return $query->result_array();
        }

        public function inf_3_b($data){
            $this->db->select('pi2.id_p_items,
                        	   pi2.id_enlace,
                               pi2.id_partidad_presupuestaria,
                               pp.desc_partida_presupuestaria,
                               pp.codigopartida_presupuestaria,
                        	   pi2.id_ccnu,
                        	   c2.desc_ccnu,
                        	   pi2.fecha_desde,
                        	   pi2.fecha_hasta,
                        	   pi2.especificacion,
                               pi2.id_unidad_medida,
                        	   um.desc_unidad_medida,
                               pi2.cantidad,
                               pi2.costo_unitario,
                        	   pi2.i,
                        	   pi2.ii,
                        	   pi2.iii,
                        	   pi2.iv,
                               pi2.cant_total_distribuir,
                        	   pi2.precio_total,
                        	   pi2.alicuota_iva,
                               pi2.iva_estimado,
                               pi2.monto_estimado');
            $this->db->join('ccnu c2','c2.codigo_ccnu = pi2.id_ccnu');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = pi2.id_partidad_presupuestaria');
            $this->db->join('unidad_medida um','um.id_unidad_medida = pi2.id_unidad_medida');
            $this->db->where('pi2.id_enlace', $data['id_p_proyecto']);
            $this->db->where('pi2.id_p_acc', 0);
            $query = $this->db->get('p_items pi2');
            return $query->result_array();
        }

        public function editar_programacion_proy($id_p_proyecto, $id_programacion, $p_proyecto,$p_items,$p_ffinanciamiento){

            $this->db->where('id_programacion', $id_programacion);
            $this->db->where('id_p_proyecto', $id_p_proyecto);
            $update = $this->db->update('p_proyecto', $p_proyecto);

            if ($update) {
                $this->db->where('id_enlace', $id_p_proyecto);
                $this->db->where('id_p_acc', 0);
                $this->db->delete('public.p_items');

                    $cant_proy = $p_items['id_ccnu'];
                    $count_prog = count($cant_proy);
                    for ($i=0; $i < $count_prog; $i++) {
                        $data1 = array(
                            'id_enlace'                  => $id_p_proyecto,
                            'id_p_acc'                   => 0,
                            'id_partidad_presupuestaria' => $p_items['id_par_presupuestaria'][$i],
                            'id_ccnu'                    => $p_items['id_ccnu'][$i],
                            'fecha_desde'                => $p_items['fecha_desde'][$i],
                            'fecha_hasta'                => $p_items['fecha_hasta'][$i],
                            'especificacion'             => $p_items['especificacion'][$i],
                            'id_unidad_medida'           => $p_items['id_unidad_medida'][$i],
                            'i'                          => $p_items['i'][$i],
                            'ii'                         => $p_items['ii'][$i],
                            'iii'                        => $p_items['iii'][$i],
                            'iv'                         => $p_items['iv'][$i],
                            'costo_unitario'             => 0,
                            'precio_total'               => $p_items['precio_total'][$i],
                            'alicuota_iva'               => $p_items['id_alicuota_iva'][$i],
                            'iva_estimado'               => $p_items['iva_estimado'][$i],
                            'monto_estimado'               => $p_items['monto_estimado'][$i],
                        );
                        $this->db->insert('public.p_items',$data1);
                    }

                    $this->db->where('id_enlace', $id_p_proyecto);
                    $this->db->where('id_p_acc', 0);
                    $this->db->delete('public.p_ffinanciamiento');

                    $cant_pff = $p_ffinanciamiento['id_par_presupuestaria'];
                    $count_pff = count($cant_pff);

                    for ($i=0; $i < $count_pff; $i++) {

                        $data2 = array(
                            'id_enlace'                  => $id_p_proyecto,
                            'id_p_acc'                   => 0,
                            'id_estado'                  => $p_ffinanciamiento['id_estado'][$i],
                            'id_partidad_presupuestaria' => $p_ffinanciamiento['id_par_presupuestaria'][$i],
                            'id_fuente_financiamiento'   => $p_ffinanciamiento['id_fuente_financiamiento'][$i],
                            'porcentaje'                 => $p_ffinanciamiento['porcentaje'][$i],
                        );
                        $this->db->insert('public.p_ffinanciamiento',$data2);
                    }
            }
            return true;
        }

        public function editar_programacion_proy_b($id_p_proyecto, $id_programacion, $p_proyecto,$p_items,$p_ffinanciamiento){
            $this->db->where('id_programacion', $id_programacion);
            $this->db->where('id_p_proyecto', $id_p_proyecto);
            $update = $this->db->update('p_proyecto', $p_proyecto);

            if ($update) {
                $this->db->where('id_enlace', $id_p_proyecto);
                $this->db->where('id_p_acc', 0);
                $this->db->delete('public.p_items');
                    $cant_proy = $p_items['id_ccnu'];
                    $count_prog = count($cant_proy);
                    for ($i=0; $i < $count_prog; $i++) {
                        $data1 = array(
                            'id_enlace'                  => $id_p_proyecto,
                            'id_p_acc'                   => 0,
                            'id_partidad_presupuestaria' => $p_items['id_par_presupuestaria'][$i],
                            'id_ccnu'                    => $p_items['id_ccnu'][$i],
                            'fecha_desde'                => $p_items['fecha_desde'],
                            'fecha_hasta'                => $p_items['fecha_hasta'],
                            'especificacion'             => $p_items['especificacion'][$i],
                            'id_unidad_medida'           => $p_items['id_unidad_medida'][$i],
                            'cantidad'                   => $p_items['cantidad'][$i],
                            'i'                          => $p_items['i'][$i],
                            'ii'                         => $p_items['ii'][$i],
                            'iii'                        => $p_items['iii'][$i],
                            'iv'                         => $p_items['iv'][$i],
                            'cant_total_distribuir'      => $p_items['cant_total_distribuir'][$i],
                            'costo_unitario'             => $p_items['costo_unitario'][$i],
                            'precio_total'               => $p_items['precio_total'][$i],
                            'alicuota_iva'               => $p_items['id_alicuota_iva'][$i],
                            'iva_estimado'               => $p_items['iva_estimado'][$i],
                            'monto_estimado'             => $p_items['monto_estimado'][$i],
                        );
                        $this->db->insert('public.p_items',$data1);
                    }
                    $this->db->where('id_enlace', $id_p_proyecto);
                    $this->db->where('id_p_acc', 0);
                    $this->db->delete('public.p_ffinanciamiento');
                    $cant_pff = $p_ffinanciamiento['id_par_presupuestaria'];
                    $count_pff = count($cant_pff);

                    for ($i=0; $i < $count_pff; $i++) {

                        $data2 = array(
                            'id_enlace'                  => $id_p_proyecto,
                            'id_p_acc'                   => 0,
                            'id_estado'                  => $p_ffinanciamiento['id_estado'][$i],
                            'id_partidad_presupuestaria' => $p_ffinanciamiento['id_par_presupuestaria'][$i],
                            'id_fuente_financiamiento'   => $p_ffinanciamiento['id_fuente_financiamiento'][$i],
                            'porcentaje'                 => $p_ffinanciamiento['porcentaje'][$i],
                        );
                        $this->db->insert('public.p_ffinanciamiento',$data2);
                    }
            }
            return true;
        }

        // ACCION CENTRALIZADA

        public function consultar_acc_centralizada($id_programacion){
            $this->db->select('pac.id_p_acc_centralizada,
                        	   pac.id_programacion,
                        	   pac.id_accion_centralizada,
                        	   ac.desc_accion_centralizada,
                        	   pac.id_obj_comercial,
                        	   oc.desc_objeto_contrata');
            $this->db->join('objeto_contrata oc', 'oc.id_objeto_contrata = pac.id_obj_comercial ');
            $this->db->join('accion_centralizada ac', 'ac.id_accion_centralizada = pac.id_accion_centralizada');
            $this->db->where('pac.id_programacion', $id_programacion);
            $query = $this->db->get('p_acc_centralizada pac');
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

        // BIENES
        public function save_programacion_acc($acc_cargar,$p_proyecto,$p_acc_centralizada,$p_items,$p_ffinanciamiento){

            if ($acc_cargar == '1') {
                $quers =$this->db->insert('p_proyecto',$p_proyecto);

                if ($quers) {
                    $id = $this->db->insert_id();

                        $cant_proy = $p_items['id_ccnu'];
                        $count_prog = count($cant_proy);
                        for ($i=0; $i < $count_prog; $i++) {
                            $data1 = array(
                                'id_enlace'                  => $id,
                                'id_p_acc'                   => 0,
                                'id_partidad_presupuestaria' => $p_items['id_par_presupuestaria'][$i],
                                'id_ccnu'                    => $p_items['id_ccnu'][$i],
                                'fecha_desde'                => $p_items['fecha_desde'],
                                'fecha_hasta'                => $p_items['fecha_hasta'],
                                'especificacion'             => $p_items['especificacion'][$i],
                                'id_unidad_medida'           => $p_items['id_unidad_medida'][$i],
                                'cantidad'                   => $p_items['cantidad'][$i],
                                'i'                          => $p_items['i'][$i],
                                'ii'                         => $p_items['ii'][$i],
                                'iii'                        => $p_items['iii'][$i],
                                'iv'                         => $p_items['iv'][$i],
                                'cant_total_distribuir'      => $p_items['cant_total_distribuir'][$i],
                                'costo_unitario'             => $p_items['costo_unitario'][$i],
                                'precio_total'               => $p_items['precio_total'][$i],
                                'alicuota_iva'               => $p_items['id_alicuota_iva'][$i],
                                'iva_estimado'               => $p_items['iva_estimado'][$i],
                                'monto_estimado'             => $p_items['monto_estimado'][$i],
                            );
                            $this->db->insert('public.p_items',$data1);
                        }

                        $cant_pff = $p_ffinanciamiento['id_par_presupuestaria'];
                        $count_pff = count($cant_pff);

                        for ($i=0; $i < $count_pff; $i++) {

                            $data2 = array(
                                'id_enlace'                  => $id,
                                'id_p_acc'                   => 0,
                                'id_estado'                  => $p_ffinanciamiento['id_estado'][$i],
                                'id_partidad_presupuestaria' => $p_ffinanciamiento['id_par_presupuestaria'][$i],
                                'id_fuente_financiamiento'   => $p_ffinanciamiento['id_fuente_financiamiento'][$i],
                                'porcentaje'                 => $p_ffinanciamiento['porcentaje'][$i],
                            );
                            $this->db->insert('public.p_ffinanciamiento',$data2);
                        }
                }
                return true;
            }elseif ($acc_cargar == '2') {
                $quers =$this->db->insert('p_acc_centralizada',$p_acc_centralizada);

                if ($quers) {
                    $id = $this->db->insert_id();

                        $cant_proy = $p_items['id_ccnu'];
                        $count_prog = count($cant_proy);
                        for ($i=0; $i < $count_prog; $i++) {
                            $data1 = array(
                                'id_enlace'                  => $id,
                                'id_p_acc'                   => 1,
                                'id_partidad_presupuestaria' => $p_items['id_par_presupuestaria'][$i],
                                'id_ccnu'                    => $p_items['id_ccnu'][$i],
                                'fecha_desde'                => $p_items['fecha_desde'],
                                'fecha_hasta'                => $p_items['fecha_hasta'],
                                'especificacion'             => $p_items['especificacion'][$i],
                                'id_unidad_medida'           => $p_items['id_unidad_medida'][$i],
                                'cantidad'                   => $p_items['cantidad'][$i],
                                'i'                          => $p_items['i'][$i],
                                'ii'                         => $p_items['ii'][$i],
                                'iii'                        => $p_items['iii'][$i],
                                'iv'                         => $p_items['iv'][$i],
                                'cant_total_distribuir'      => $p_items['cant_total_distribuir'][$i],
                                'costo_unitario'             => $p_items['costo_unitario'][$i],
                                'precio_total'               => $p_items['precio_total'][$i],
                                'alicuota_iva'               => $p_items['id_alicuota_iva'][$i],
                                'iva_estimado'               => $p_items['iva_estimado'][$i],
                                'monto_estimado'             => $p_items['monto_estimado'][$i],
                            );
                            $this->db->insert('public.p_items',$data1);
                        }

                        $cant_pff = $p_ffinanciamiento['id_par_presupuestaria'];
                        $count_pff = count($cant_pff);

                        for ($i=0; $i < $count_pff; $i++) {

                            $data2 = array(
                                'id_enlace'                  => $id,
                                'id_p_acc'                   => 1,
                                'id_estado'                  => $p_ffinanciamiento['id_estado'][$i],
                                'id_partidad_presupuestaria' => $p_ffinanciamiento['id_par_presupuestaria'][$i],
                                'id_fuente_financiamiento'   => $p_ffinanciamiento['id_fuente_financiamiento'][$i],
                                'porcentaje'                 => $p_ffinanciamiento['porcentaje'][$i],
                            );
                            $this->db->insert('public.p_ffinanciamiento',$data2);
                        }
                }
                return true;
            }
        }

        public function inf_1_acc($id_p_acc_centralizada){
            $this->db->select('pac.id_p_acc_centralizada,
                        	   pac.id_programacion,
                        	   pac.id_accion_centralizada,
                        	   ac.desc_accion_centralizada,
                        	   pac.id_obj_comercial,
                        	   oc.desc_objeto_contrata ');
            $this->db->join('accion_centralizada ac', 'ac.id_accion_centralizada = pac.id_accion_centralizada');
            $this->db->join('objeto_contrata oc', 'oc.id_objeto_contrata = pac.id_obj_comercial ');
            $this->db->where('pac.id_p_acc_centralizada', $id_p_acc_centralizada);
            $query = $this->db->get('p_acc_centralizada pac ');
            return $query->result_array();
        }

        public function inf_2_acc_pdf($id_p_acc_centralizada){
            $this->db->select('pf.id_enlace,
                        	   pf.id_partidad_presupuestaria,
                        	   pp.desc_partida_presupuestaria,
                               pp.codigopartida_presupuestaria,
                        	   pf.id_estado,
                        	   pf.id_fuente_financiamiento,
                        	   ff.desc_fuente_financiamiento,
                        	   pf.porcentaje ');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = pf.id_partidad_presupuestaria');
            $this->db->join('fuente_financiamiento ff','ff.id_fuente_financiamiento = pf.id_fuente_financiamiento');
            $this->db->where('pf.id_enlace', $id_p_acc_centralizada);
            $this->db->where('pf.id_p_acc', 1);
            $query = $this->db->get('p_ffinanciamiento pf');
            return $query->result_array();
        }

        public function inf_3_acc_pdf($id_p_acc_centralizada){
            $this->db->select('pi2.id_p_items,
                        	   pi2.id_enlace,
                               pi2.id_partidad_presupuestaria,
                               pp.desc_partida_presupuestaria,
                               pp.codigopartida_presupuestaria,
                        	   pi2.id_ccnu,
                        	   c2.desc_ccnu,
                               pi2.fecha_desde,
                               pi2.fecha_hasta,
                        	   pi2.especificacion,
                               pi2.id_unidad_medida,
                        	   um.desc_unidad_medida,
                        	   pi2.i,
                        	   pi2.ii,
                        	   pi2.iii,
                        	   pi2.iv,
                               pi2.costo_unitario,
                        	   pi2.precio_total,
                        	   pi2.alicuota_iva,
                               pi2.iva_estimado,
                               pi2.monto_estimado');
            $this->db->join('ccnu c2','c2.codigo_ccnu = pi2.id_ccnu');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = pi2.id_partidad_presupuestaria');
            $this->db->join('unidad_medida um','um.id_unidad_medida = pi2.id_unidad_medida');
            $this->db->where('pi2.id_enlace', $id_p_acc_centralizada);
            $this->db->where('pi2.id_p_acc', 1);
            $query = $this->db->get('p_items pi2');
            return $query->result_array();
        }


        public function inf_2_acc($data){
            $this->db->select('pf.id_enlace,
                        	   pf.id_partidad_presupuestaria,
                        	   pp.desc_partida_presupuestaria,
                               pp.codigopartida_presupuestaria,
                        	   pf.id_estado,
                        	   pf.id_fuente_financiamiento,
                        	   ff.desc_fuente_financiamiento,
                        	   pf.porcentaje ');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = pf.id_partidad_presupuestaria');
            $this->db->join('fuente_financiamiento ff','ff.id_fuente_financiamiento = pf.id_fuente_financiamiento');
            $this->db->where('pf.id_enlace', $data['id_p_acc_centralizada']);
            $this->db->where('pf.id_p_acc', 1);
            $query = $this->db->get('p_ffinanciamiento pf');
            return $query->result_array();
        }

        public function inf_3_acc($data){
            $this->db->select('pi2.id_p_items,
                        	   pi2.id_enlace,
                               pi2.id_partidad_presupuestaria,
                               pp.desc_partida_presupuestaria,
                               pp.codigopartida_presupuestaria,
                        	   pi2.id_ccnu,
                        	   c2.desc_ccnu,
                               pi2.fecha_desde,
                               pi2.fecha_hasta,
                        	   pi2.especificacion,
                               pi2.id_unidad_medida,
                        	   um.desc_unidad_medida,
                        	   pi2.i,
                        	   pi2.ii,
                        	   pi2.iii,
                        	   pi2.iv,
                               pi2.costo_unitario,
                        	   pi2.precio_total,
                        	   pi2.alicuota_iva,
                               pi2.iva_estimado,
                               pi2.monto_estimado');
            $this->db->join('ccnu c2','c2.codigo_ccnu = pi2.id_ccnu');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = pi2.id_partidad_presupuestaria');
            $this->db->join('unidad_medida um','um.id_unidad_medida = pi2.id_unidad_medida');
            $this->db->where('pi2.id_enlace', $data['id_p_acc_centralizada']);
            $this->db->where('pi2.id_p_acc', 1);
            $query = $this->db->get('p_items pi2');
            return $query->result_array();
        }


        public function inf_3_acc_b($data){
            $this->db->select('pi2.id_p_items,
                        	   pi2.id_enlace,
                               pi2.id_partidad_presupuestaria,
                               pp.desc_partida_presupuestaria,
                               pp.codigopartida_presupuestaria,
                        	   pi2.id_ccnu,
                        	   c2.desc_ccnu,
                               pi2.fecha_desde,
                               pi2.fecha_hasta,
                        	   pi2.especificacion,
                               pi2.id_unidad_medida,
                        	   um.desc_unidad_medida,
                               pi2.cantidad,
                        	   pi2.i,
                        	   pi2.ii,
                        	   pi2.iii,
                        	   pi2.iv,
                               pi2.cant_total_distribuir,
                               pi2.costo_unitario,
                        	   pi2.precio_total,
                        	   pi2.alicuota_iva,
                               pi2.iva_estimado,
                               pi2.monto_estimado');
            $this->db->join('ccnu c2','c2.codigo_ccnu = pi2.id_ccnu');
            $this->db->join('partida_presupuestaria pp','pp.id_partida_presupuestaria = pi2.id_partidad_presupuestaria');
            $this->db->join('unidad_medida um','um.id_unidad_medida = pi2.id_unidad_medida');
            $this->db->where('pi2.id_enlace', $data['id_p_acc_centralizada']);
            $this->db->where('pi2.id_p_acc', 1);
            $query = $this->db->get('p_items pi2');
            return $query->result_array();
        }

        public function editar_programacion_acc($id_p_acc_centralizada, $id_programacion, $p_acc_centralizada,$p_items,$p_ffinanciamiento){

            $this->db->where('id_programacion', $id_programacion);
            $this->db->where('id_p_acc_centralizada', $id_p_acc_centralizada);
            $update = $this->db->update('p_acc_centralizada', $p_acc_centralizada);

            if ($update) {
                $this->db->where('id_enlace', $id_p_acc_centralizada);
                $this->db->where('id_p_acc', 1);
                $this->db->delete('public.p_items');

                    $cant_proy = $p_items['id_ccnu'];
                    $count_prog = count($cant_proy);
                    for ($i=0; $i < $count_prog; $i++) {
                        $data1 = array(
                            'id_enlace'                  => $id_p_acc_centralizada,
                            'id_p_acc'                   => 1,
                            'id_partidad_presupuestaria' => $p_items['id_par_presupuestaria'][$i],
                            'id_ccnu'                    => $p_items['id_ccnu'][$i],
                            'fecha_desde'                => $p_items['fecha_desde'][$i],
                            'fecha_hasta'                => $p_items['fecha_hasta'][$i],
                            'especificacion'             => $p_items['especificacion'][$i],
                            'id_unidad_medida'           => $p_items['id_unidad_medida'][$i],
                            'i'                          => $p_items['i'][$i],
                            'ii'                         => $p_items['ii'][$i],
                            'iii'                        => $p_items['iii'][$i],
                            'iv'                         => $p_items['iv'][$i],
                            'costo_unitario'             => 0,
                            'precio_total'               => $p_items['precio_total'][$i],
                            'alicuota_iva'               => $p_items['id_alicuota_iva'][$i],
                            'iva_estimado'               => $p_items['iva_estimado'][$i],
                            'monto_estimado'               => $p_items['monto_estimado'][$i],
                        );
                        $this->db->insert('public.p_items',$data1);
                    }

                    $this->db->where('id_enlace', $id_p_acc_centralizada);
                    $this->db->where('id_p_acc', 1);
                    $this->db->delete('public.p_ffinanciamiento');

                    $cant_pff = $p_ffinanciamiento['id_par_presupuestaria'];
                    $count_pff = count($cant_pff);

                    for ($i=0; $i < $count_pff; $i++) {

                        $data2 = array(
                            'id_enlace'                  => $id_p_acc_centralizada,
                            'id_p_acc'                   => 1,
                            'id_estado'                  => $p_ffinanciamiento['id_estado'][$i],
                            'id_partidad_presupuestaria' => $p_ffinanciamiento['id_par_presupuestaria'][$i],
                            'id_fuente_financiamiento'   => $p_ffinanciamiento['id_fuente_financiamiento'][$i],
                            'porcentaje'                 => $p_ffinanciamiento['porcentaje'][$i],
                        );
                        $this->db->insert('public.p_ffinanciamiento',$data2);
                    }
            }
            return true;
        }

        public function editar_programacion_acc_b($id_p_acc_centralizada, $id_programacion, $p_acc_centralizada,$p_items,$p_ffinanciamiento){

            $this->db->where('id_programacion', $id_programacion);
            $this->db->where('id_p_acc_centralizada', $id_p_acc_centralizada);
            $update = $this->db->update('p_acc_centralizada', $p_acc_centralizada);

            if ($update) {
                $this->db->where('id_enlace', $id_p_acc_centralizada);
                $this->db->where('id_p_acc', 1);
                $this->db->delete('public.p_items');

                    $cant_proy = $p_items['id_ccnu'];
                    $count_prog = count($cant_proy);
                    for ($i=0; $i < $count_prog; $i++) {
                        $data1 = array(
                            'id_enlace'                  => $id_p_acc_centralizada,
                            'id_p_acc'                   => 1,
                            'id_partidad_presupuestaria' => $p_items['id_par_presupuestaria'][$i],
                            'id_ccnu'                    => $p_items['id_ccnu'][$i],
                            'fecha_desde'                => $p_items['fecha_desde'],
                            'fecha_hasta'                => $p_items['fecha_hasta'],
                            'especificacion'             => $p_items['especificacion'][$i],
                            'id_unidad_medida'           => $p_items['id_unidad_medida'][$i],
                            'cantidad'                   => $p_items['cantidad'][$i],
                            'i'                          => $p_items['i'][$i],
                            'ii'                         => $p_items['ii'][$i],
                            'iii'                        => $p_items['iii'][$i],
                            'iv'                         => $p_items['iv'][$i],
                            'cant_total_distribuir'      => $p_items['cant_total_distribuir'][$i],
                            'costo_unitario'             => $p_items['costo_unitario'][$i],
                            'precio_total'               => $p_items['precio_total'][$i],
                            'alicuota_iva'               => $p_items['id_alicuota_iva'][$i],
                            'iva_estimado'               => $p_items['iva_estimado'][$i],
                            'monto_estimado'               => $p_items['monto_estimado'][$i],
                        );
                        $this->db->insert('public.p_items',$data1);
                    }

                    $this->db->where('id_enlace', $id_p_acc_centralizada);
                    $this->db->where('id_p_acc', 1);
                    $this->db->delete('public.p_ffinanciamiento');

                    $cant_pff = $p_ffinanciamiento['id_par_presupuestaria'];
                    $count_pff = count($cant_pff);

                    for ($i=0; $i < $count_pff; $i++) {

                        $data2 = array(
                            'id_enlace'                  => $id_p_acc_centralizada,
                            'id_p_acc'                   => 1,
                            'id_estado'                  => $p_ffinanciamiento['id_estado'][$i],
                            'id_partidad_presupuestaria' => $p_ffinanciamiento['id_par_presupuestaria'][$i],
                            'id_fuente_financiamiento'   => $p_ffinanciamiento['id_fuente_financiamiento'][$i],
                            'porcentaje'                 => $p_ffinanciamiento['porcentaje'][$i],
                        );
                        $this->db->insert('public.p_ffinanciamiento',$data2);
                    }
            }
            return true;
        }
    }
