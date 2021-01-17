<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{


    public function save($data)
    {
        //$this->db->query("ALTER TABLE user AUTO_INCREMENT 1");
        $this->db->insert("usuarios", $data);
    }

    public function getUsers()
    {
        $this->db->select("*");
        $this->db->from("usuarios");
        $results = $this->db->get();
        return $results->result();
    }

    public function getUser($id)
    {
        $this->db->select("u.id, u.nombre, u.email");
        $this->db->from("usuarios u");
        $this->db->where("u.id", $id);
        $result = $this->db->get();
        return $result->row();
    }

    public function update($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update("usuarios", $data);
    }

    public function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("user");
    }


    // CUENTA DANTE
    public function consultar_organos()
    {
        $this->db->select('o.id_organo,
                           o.codigo,
                          o.cod_onapre,
                          concat(tr.desc_rif, \' - \' ,o.rif) as rif,
                          o.siglas,
                           o.desc_organo');
        $this->db->join('tipo_rif tr', 'tr.id_rif = o.tipo_rif');
        $this->db->order_by('o.id_organo');
        $query = $this->db->get('organos o');
        return $query->result_array();
    }

    public function consultar_entes()
    {
        $this->db->select('e.id_entes,
                           e.codigo,
                          concat(tr.desc_rif, \' - \' ,e.rif) as rif,
                          e.desc_entes');
        $this->db->order_by('e.id_entes');
        $this->db->join('tipo_rif tr', 'tr.id_rif = e.tipo_rif');
        $query = $this->db->get('entes e');
        $response = $query->result_array();
        return $response;
    }

    public function consultar_enteads()
    {
        $this->db->select('ea.id_entes_ads,
                           ea.codigo,
                          concat(tr.desc_rif, \' - \' ,ea.rif) as rif,
                          ea.desc_entes_ads ');
        $this->db->order_by('ea.id_entes_ads');
        $this->db->join('tipo_rif tr', 'tr.id_rif = ea.tipo_rif');
        $query = $this->db->get('entes_ads ea ');
        $response = $query->result_array();
        return $response;
    }

    public function llenarm($data)
    {
        $this->db->select('o.id_organo,
                           o.cod_onapre,
                           o.codigo,
                           concat(tr.desc_rif, \'-\' ,o.rif) as rif,
                           o.siglas,
                           o.direccion_fiscal,
                           o.desc_organo');
        $this->db->join('tipo_rif tr', 'tr.id_rif = o.tipo_rif');
        $this->db->where('o.rif', $data['rif_b']);
        $query = $this->db->get('organos o');
        return $result = $query->row_array();
    }


    // ava debe guardar cuenta dante en usuario y guardar los otros datos en funcionarios
    public function savedante($data1,$datos2)
    {

        $this->db->insert("usuarios", $data1);
       


//se se supone que la funcion  insert_id(); me guarda el id del ultimo registo
        $identificador = $this->db->insert_id();

        $datos2['id_usuario']=$identificador;
        $this->db->insert('funcionarios', $datos2);
    }
}
