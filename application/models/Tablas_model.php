<?php
class Tablas_model extends CI_Model
{

     //________FUENTE DE FINANCIAMIENTO_____________
    public function get_entries()
    {
        $query = $this->db->get('programacion.fuente_financiamiento');
           if (count($query->result()) > 0) {
             return $query->result();
         }
    }

    public function saves($data)
    {
        return $this->db->insert('programacion.fuente_financiamiento', $data);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('programacion.fuente_financiamiento', array('id_fuente_financiamiento' => $id));
    }

    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from('programacion.fuente_financiamiento');
        $this->db->where('id_fuente_financiamiento', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_entry($data)
    {
        return $this->db->update('programacion.fuente_financiamiento', $data, array('id_fuente_financiamiento' => $data['id_fuente_financiamiento']));
    }

 //____________ALICUOTA______________________
    public function get_alicuota()
        {
            $query = $this->db->get('programacion.alicuota_iva');
            // if (count($query->result()) > 0) {
            return $query->result();
            // }
        }

    public function savesalicuota($data)
    {
        return $this->db->insert('programacion.alicuota_iva', $data);
    }
    public function delete_alicuota($id)
    {
        return $this->db->delete('programacion.alicuota_iva', array('id_alicuota_iva' => $id));
    }
    public function single_alicuota($id)
    {
        $this->db->select('*');
        $this->db->from('programacion.alicuota_iva');
        $this->db->where('id_alicuota_iva', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_alicuota($data)
    {
        return $this->db->update('programacion.alicuota_iva', $data, array('id_alicuota_iva' => $data['id_alicuota_iva']));
    }

    //_________________PARTIDA PRESUPUESTARIA _________________________________________________
    public function get_partidap()
        {
            $query = $this->db->get('programacion.partida_presupuestaria');
            // if (count($query->result()) > 0) {
            return $query->result();
            // }
        }

    public function savepartidap($data)
    {
        return $this->db->insert('programacion.partida_presupuestaria', $data);
    }
    public function delete_partidap($id)
    {
        return $this->db->delete('programacion.partida_presupuestaria', array('id_partida_presupuestaria' => $id));
    }
    public function single_partidap($id)
    {
        $this->db->select('*');
        $this->db->from('programacion.partida_presupuestaria');
        $this->db->where('id_partida_presupuestaria', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_partidap($data)
    {
        return $this->db->update('programacion.partida_presupuestaria', $data, array('id_partida_presupuestaria' => $data['id_partida_presupuestaria']));
    }

    //______________ACCION CENTRALIZADA______________________
    public function get_centra()
        {
            $query = $this->db->get('programacion.accion_centralizada');
            // if (count($query->result()) > 0) {
            return $query->result();
            // }
        }

    public function savecentra($data)
    {
        return $this->db->insert('programacion.accion_centralizada', $data);
    }
    public function delete_centra($id)
    {
        return $this->db->delete('programacion.accion_centralizada', array('id_accion_centralizada' => $id));
    }
    public function single_centra($id)
    {
        $this->db->select('*');
        $this->db->from('programacion.accion_centralizada');
        $this->db->where('id_accion_centralizada', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_centra($data)
    {
        return $this->db->update('programacion.accion_centralizada', $data, array('id_accion_centralizada' => $data['id_accion_centralizada']));
    }

    //_______________UNIDAD DE MEDIDA _____________
    public function get_und()
        {
            $query = $this->db->get('programacion.unidad_medida');
            // if (count($query->result()) > 0) {
            return $query->result();
            // }
        }

    public function save_und($data)
    {
        return $this->db->insert('programacion.unidad_medida', $data);
    }
    public function delete_und($id)
    {
        return $this->db->delete('programacion.unidad_medida', array('id_unidad_medida' => $id));
    }
    public function single_und($id)
    {
        $this->db->select('*');
        $this->db->from('programacion.unidad_medida');
        $this->db->where('id_unidad_medida', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_und($data)
    {
        return $this->db->update('programacion.unidad_medida', $data, array('id_unidad_medida' => $data['id_unidad_medida']));
    }

    //_____________________CCNU____________________

     public function get_ccnu()
     {
         $query = $this->db->get('programacion.ccnu');
          if (count($query->result()) > 0) {
         return $query->result();
          }
     }

 public function save_ccnu($data)
 {
     return $this->db->insert('programacion.ccnu', $data);
 }
 public function delete_ccnu($id)
 {
     return $this->db->delete('programacion.ccnu', array('id_ccnu' => $id));
 }
 public function single_ccnu($id)
 {
     $this->db->select('*');
     $this->db->from('programacion.ccnu');
     $this->db->where('id_ccnu', $id);
     $query = $this->db->get();
     if (count($query->result()) > 0) {
         return $query->row();
     }
 }
 public function update_ccnu($data)
 {
     return $this->db->update('programacion.ccnu', $data, array('id_ccnu' => $data['id_ccnu']));
 }

//_______ESTADO CRUD___________________________________________________
 public function get_estado()
    {
        $query = $this->db->get('public.estados');
           if (count($query->result()) > 0) {
             return $query->result();
         }
    }
    public function save_estado($data)
    {
        return $this->db->insert('public.estados', $data);
    }
    public function single_estado($id)
 {
     $this->db->select('*');
     $this->db->from('public.estados');
     $this->db->where('id', $id);
     $query = $this->db->get();
     if (count($query->result()) > 0) {
         return $query->row();
     }
 }
 public function update_estado($data)
 {
     return $this->db->update('public.estados', $data, array('id' => $data['id']));
 }
 //_______ municipio___________________________________________________
 public function get_municipio()

 
    {
        $this->db->order_by("estado_id", "ASC");
        $query = $this->db->get('public.municipios');
       
           if (count($query->result()) > 0) {
             return $query->result();
         }
    }
    public function save_municipio($data)
    {
        return $this->db->insert('public.municipios', $data);
    }
    public function single_municipio($id)
 {
     $this->db->select('*');
     $this->db->from('public.municipios');
     $this->db->where('id', $id);
     $query = $this->db->get();
     if (count($query->result()) > 0) {
         return $query->row();
     }
 }
 public function update_municipio($data)
 {
     return $this->db->update('public.municipios', $data, array('id' => $data['id']));
 }

}
