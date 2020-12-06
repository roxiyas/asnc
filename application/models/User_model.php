<?php
    class User_model extends CI_model{

        public function save($data){
            //print_r($data);die;
      // $this->db->query("ALTER TABLE usuarios AUTO_INCREMENT 1");
        $this->db->insert("usuarios",$data); //colo nombre de la tabla
        }

    }
?>
