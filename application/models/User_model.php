<?php
    class User_model extends CI_model{

        public function save($data){
            //print_r($data);die;
      // $this->db->query("ALTER TABLE usuarios AUTO_INCREMENT 1");
        $this->db->insert("usuarios",$data); //colo nombre de la tabla
        }

        public function getUsers(){
            $this->db->select("*");
            $this->db->from("usuarios");
            $results=$this->db->get();
            return $results->result();
        }

        public function getUser($id){
            $this->db->select("u.id, u.nombre, u.email");
            $this->db->from("usuarios u");
            $this->db->where("u.id",$id);
            $result=$this->db->get();
            return $result->row();
        }

        public function update($data,$id){
            $this->db->where("id",$id);
            $this->db->update("usuarios",$data);
        }

        public function delete($id){
            $this->db->where("id",$id);
            $this->db->delete("usuarios");
        }

    }
?>
