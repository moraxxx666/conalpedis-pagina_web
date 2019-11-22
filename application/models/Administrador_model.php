<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrador_model extends CI_Model
{
    public function AgregarMensaje($mensaje)
    {
        if ($this->db->insert('web_mensajes', $mensaje)) {
            return true;
        } else return false;
    }
    public function ObtenerMensajes()
    {
        $query = $this->db->query("SELECT * FROM web_mensajes ORDER BY fecha_reciBido DESC");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else return array();
    }
    public function EliminarMensaje($IdMensaje)
    {
        if ($this->db->delete('web_mensajes', array('id_mensaje' => $IdMensaje))) {
            return true;
        } else return false;
    }
    public function VerMensaje($IdMensaje)
    {
        $query = $this->db->query("SELECT * FROM web_mensajes where id_mensaje = $IdMensaje");
        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else return null;
    }
}
