<?php
    class Login_model extends CI_model{

        public function iniciar($usuario,$contrasena){

            $this->db->select('*');
			$this->db->where('nombre',$usuario);
			$this->db->from('usuarios');
			$result = $this->db->get();

			if($result->num_rows() == 1){
				$db_clave = $result->row('password');
                $unidad = $result->row('unidad');
                if(password_verify( base64_encode(hash('sha256', $contrasena, true)),$db_clave)){
					return $result->row_array();
				}
			}else{
				return FALSE;
			}
        }

        public function consultar_organo($id_unidad){

            $this->db->select('o.id_organo,
                               o.codigo,
                               o.cod_onapre,
                               concat(tr.desc_rif, \' - \' ,o.rif) as rif,
                               o.desc_organo');
            $this->db->join('tipo_rif tr', 'tr.id_rif = o.tipo_rif');
			$this->db->where('o.codigo',$id_unidad);
			$this->db->from('organos o');
			$result = $this->db->get();

            if($result->num_rows() != 1){
                $this->db->select('e.id_organo,
                                   e.id_entes,
                                   e.codigo,
                            	   e.rif,
                            	   e.desc_entes as desc_organo,
                            	   e.cod_onapre,
                            	   e.siglas,
                            	   e.direccion_fiscal');
                $this->db->where('e.rif',$data['rif_b']);
                $this->db->from('entes e');
                $result = $this->db->get();

                if ($result->num_rows() != 1) {
                    $this->db->select('ea.id_entes,
                                       ea.id_entes_ads,
                                       ea.codigo,
                                       ea.rif,
                                       ea.desc_entes_ads as desc_organo,
                                       ea.cod_onapre,
                                       ea.siglas,
                                       ea.direccion_fiscal');
                    $this->db->where('ea.rif',$data['rif_b']);
                    $this->db->from('entes_ads ea');
                    $result = $this->db->get();
                    return $result->row_array();
                }else {
                    return $result->row_array();
                }
            }else{
				return $result->row_array();
			}
        }
    }


?>
