<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrador_model extends CI_Model
{
    public function AgregarColeccion($coleccion)
    {
        if ($this->db->insert('biblioteca_coleccion', $coleccion)) {
            return true;
        } else return false;
    }
    public function ObtenerColecciones()
    {
        $query = $this->db->query("SELECT * FROM biblioteca_coleccion");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else return false;
    }
    public function EliminarColeccion($id)
    {
        if ($this->EncontrarColeccion($id) != false) {
            if ($this->db->delete('biblioteca_coleccion', array('id_coleccion' => $id))) {
                return true;
            } else return false;
        } else return false;
    }
    public function EncontrarColeccion($id)
    {
        $query = $this->db->query("SELECT * FROM biblioteca_coleccion n WHERE n.id_coleccion = $id");
        if ($query->num_rows() === 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }
    public function AgregarLibro($libro){
        if ($this->db->insert('biblioteca_libro', $libro)) {
            return true;
        } else return false;
    }
    public function ObtenerLibros($id)
    {
        $query = $this->db->query("SELECT * FROM biblioteca_libro WHERE id_coleccion = $id");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else return array();
    }
    public function EncontrarLibro($id)
    {
        $query = $this->db->query("SELECT * FROM biblioteca_libro n WHERE n.id_libro = $id");
        if ($query->num_rows() === 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }
    public function EliminarLibro($id)
    {
        if ($this->EncontrarLibro($id) != false) {
            if ($this->db->delete('biblioteca_libro', array('id_libro' => $id))) {
                return true;
            } else return false;
        } else return false;
    }
}
