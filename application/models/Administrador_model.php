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

    public function ObtenerNoticia($id_noticia)
    {
        $query = $this->db->query("SELECT * FROM prensa_noticia WHERE id_noticia = $id_noticia");
        if ($query->num_rows() === 1) {
            return $query->row_array();
        } else {
            return null;
        }
    }
    public function ObtenerImagenesNoticia($id_noticia)
    {
        $query = $this->db->query("SELECT * FROM prensa_imagenes WHERE id_noticia = $id_noticia");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
    public function ObtenerNoticias()
    {
        $query = $this->db->query("SELECT noti.id_noticia,noti.titulo,noti.fecha,ima.nombre_imagen
        FROM prensa_noticia noti, prensa_imagenes ima
        WHERE noti.id_noticia = ima.id_noticia
        GROUP by noti.id_noticia
        ORDER by noti.fecha DESC
        LIMIT 10");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else return array();
    }
}
