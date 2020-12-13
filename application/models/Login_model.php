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

            $this->db->select('*');
			$this->db->where('codigo',$id_unidad);
			$this->db->from('organos');
			$result = $this->db->get();

			if($result->num_rows() != 1){
                $this->db->select('*');
    			$this->db->where('codigo',$id_unidad);
    			$this->db->from('entes');
    			$result = $this->db->get();
                if ($result->num_rows() != 1) {
                    $this->db->select('*');
        			$this->db->where('codigo',$id_unidad);
        			$this->db->from('entes_ads');
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
