<?php
class Tablas_model extends CI_Model
{

    public function get_entries()
    {
        $query = $this->db->get('fuente_financiamiento');
        // if (count($query->result()) > 0) {
        return $query->result();
        // }
    }

    public function saves($data)
    {
        return $this->db->insert('fuente_financiamiento', $data);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('fuente_financiamiento', array('id_fuente_financiamiento' => $id));
    }
   
    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from('fuente_financiamiento');
        $this->db->where('id_fuente_financiamiento', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_entry($data)
    {
        return $this->db->update('fuente_financiamiento', $data, array('id_fuente_financiamiento' => $data['id_fuente_financiamiento']));
    }
 //______________________________________________________________________________________________________________________________________________________________

    public function get_alicuota()
        {
            $query = $this->db->get('alicuota_iva');
            // if (count($query->result()) > 0) {
            return $query->result();
            // }
        }

    public function savesalicuota($data)
    {
        return $this->db->insert('alicuota_iva', $data);
    }
    public function delete_alicuota($id)
    {
        return $this->db->delete('alicuota_iva', array('id_alicuota_iva' => $id));
    }
    public function single_alicuota($id)
    {
        $this->db->select('*');
        $this->db->from('alicuota_iva');
        $this->db->where('id_alicuota_iva', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }  
    public function update_alicuota($data)
    {
        return $this->db->update('alicuota_iva', $data, array('id_alicuota_iva' => $data['id_alicuota_iva']));
    } 
    //______________________________________________________________________________________________________________________________________________________________

    public function get_partidap()
        {
            $query = $this->db->get('partida_presupuestaria');
            // if (count($query->result()) > 0) {
            return $query->result();
            // }
        }

    public function savepartidap($data)
    {
        return $this->db->insert('partida_presupuestaria', $data);
    }
    public function delete_partidap($id)
    {
        return $this->db->delete('partida_presupuestaria', array('id_partida_presupuestaria' => $id));
    }
    public function single_partidap($id)
    {
        $this->db->select('*');
        $this->db->from('partida_presupuestaria');
        $this->db->where('id_partida_presupuestaria', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }  
    public function update_partidap($data)
    {
        return $this->db->update('partida_presupuestaria', $data, array('id_partida_presupuestaria' => $data['id_partida_presupuestaria']));
    } 
    //______________________________________________________________________________________________________________________________________________________________

    public function get_centra()
        {
            $query = $this->db->get('accion_centralizada');
            // if (count($query->result()) > 0) {
            return $query->result();
            // }
        }

    public function savecentra($data)
    {
        return $this->db->insert('accion_centralizada', $data);
    }
    public function delete_centra($id)
    {
        return $this->db->delete('accion_centralizada', array('id_accion_centralizada' => $id));
    }
    public function single_centra($id)
    {
        $this->db->select('*');
        $this->db->from('accion_centralizada');
        $this->db->where('id_accion_centralizada', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }  
    public function update_centra($data)
    {
        return $this->db->update('accion_centralizada', $data, array('id_accion_centralizada' => $data['id_accion_centralizada']));
    } 
    //______________________________________________________________________________________________________________________________________________________________

    public function get_und()
        {
            $query = $this->db->get('unidad_medida');
            // if (count($query->result()) > 0) {
            return $query->result();
            // }
        }

    public function save_und($data)
    {
        return $this->db->insert('unidad_medida', $data);
    }
    public function delete_und($id)
    {
        return $this->db->delete('unidad_medida', array('id_unidad_medida' => $id));
    }
    public function single_und($id)
    {
        $this->db->select('*');
        $this->db->from('unidad_medida');
        $this->db->where('id_unidad_medida', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }  
    public function update_und($data)
    {
        return $this->db->update('unidad_medida', $data, array('id_unidad_medida' => $data['id_accion_centralizada']));
    } 
     //______________________________________________________________________________________________________________________________________________________________

     public function get_ccnu()
     {
         $query = $this->db->get('ccnu');
         // if (count($query->result()) > 0) {
         return $query->result();
         // }
     }

 public function save_ccnu($data)
 {
     return $this->db->insert('ccnu', $data);
 }
 public function delete_ccnu($id)
 {
     return $this->db->delete('ccnu', array('id_ccnu' => $id));
 }
 public function single_ccnu($id)
 {
     $this->db->select('*');
     $this->db->from('ccnu');
     $this->db->where('id_ccnu', $id);
     $query = $this->db->get();
     if (count($query->result()) > 0) {
         return $query->row();
     }
 }  
 public function update_ccnu($data)
 {
     return $this->db->update('ccnu', $data, array('id_ccnu' => $data['id_ccnu']));
 } 
 
}