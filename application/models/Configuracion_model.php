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

        public function save_organismo($data){
            $this->db->select('codigo');
            $this->db->order_by('codigo desc');
            $query = $this->db->get('organos');
            $response = $query->row_array();

            $cod = $response['codigo'];
            $separa = explode('-', $cod);
            $letra = $separa['0'];
            $codi = $separa['1'];
            $codig = $codi + '00001';
            $codigo = $letra.'-'.$codig;

            $this->db->select('*');
            $this->db->where('tipo_rif', $data['tipo_rif']);
            $this->db->where('rif', $data['rif']);
            $query2 = $this->db->get('organos');
            $response2 = $query2->row_array();

            if ($response2) {
                return 'false';
            }else {
                $data = array(
        			'id_organoads'		=> '1',
                    'codigo'            => $codigo,
        			'desc_organo'		=> $data['desc_organo'],
        			'cod_onapre'	 	=> $data['cod_onapre'],
        			'siglas' 			=> $data['siglas'],
        			'tipo_rif'			=> $data['tipo_rif'],
        			'rif' 				=> $data['rif'],
        			'id_clasificacion' 	=> $data['id_clasificacion'],
        			'tel1' 		        => $data['tel_local'],
        			'tel2' 		        => $data['tel_local_2'],
        			'movil1'			=> $data['tel_movil'],
        			'movil2' 		    => $data['tel_movil_2'],
        			'pagina_web' 		=> $data['pag_web'],
        			'correo'			=> $data['email'],
        			'id_estado' 		=> $data['id_estado'],
        			'id_municipio' 		=> $data['id_municipio'],
        			'id_parroquia' 		=> $data['id_parroquia'],
        			'direccion_fiscal' 	=> $data['direccion_fiscal'],
        			'gaceta'	        => $data['gaceta_oficial'],
        			'fecha_gaceta'		=> $data['fecha_gaceta'],
                    'usuario'		    => $data['usuario'],
        		);
                $this->db->insert("organos",$data); //colo nombre de la tabla
                return true;
            }
        }
    }
?>
