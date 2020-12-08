<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function save($data){
        //$this->db->query("ALTER TABLE user AUTO_INCREMENT 1");
        $this->db->insert("usuarios",$data);
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
        $this->db->delete("user");
    }


    // CUENTA DANTE

    public function consultar_organos(){
        $this->db->select('o.id_organo,
                          concat(tr.desc_rif, \' - \' ,o.rif) as rif,
                          o.desc_organo');
        $this->db->join('tipo_rif tr', 'tr.id_rif = o.tipo_rif');
        $query = $this->db->get('organos o');
        return $query->result_array();
    }
}
