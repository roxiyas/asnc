<?php
    class Login_model extends CI_model{

        public function iniciar($usuario,$contrasena){

            $this->db->select('*');
			$this->db->where('usuario',$usuario);
			$this->db->from('usuarios');
			$result = $this->db->get();

			if($result->num_rows() == 1){
				$db_clave = $result->row('password');
                if(password_verify( base64_encode(
					hash('sha256', $contrasena, true)
				),$db_clave)){
					print_r($result->row_array());die;
				}
			}else{
				return FALSE;
			}
        }
    }


?>
