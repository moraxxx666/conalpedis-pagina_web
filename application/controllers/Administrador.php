<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrador extends CI_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->load->model('administrador_model', '', TRUE);
    }
    public function login()
    {
        echo "hola";
        $usuario =  $this->input->post('usuario');
        $contrasena = $this->input->post('contrasena');
        if ($this->ion_auth->login($usuario, $contrasena, false) && $this->ion_auth->is_admin()) {
            redirect('Administrador/Mensajes');
        } else {
            $this->session->set_flashdata('mensaje', 'Usuario o Contraseña incorrecta intentalo de nuevo');
            redirect('/Inicio');
        }
    }
    public function logout()
    {
        $this->ion_auth->logout();
        redirect('/Inicio');
    }
    public function Mensajes()
    {
        if ($this->ion_auth->logged_in()) {
            $data['usuario'] = $this->ion_auth->user()->row();
            $data['mensajes'] = $this->administrador_model->ObtenerMensajes();
            $this->load->view('administrador/Header', $data);
            $this->load->view('administrador/Styles');
            $this->load->view('administrador/NavBar');
            $this->load->view('administrador/Mensajes', $data);
            $this->load->view('public/Footer');
            $this->load->view('administrador/Scripts');
        } else {
            $this->session->set_flashdata('mensaje', 'Necesitas Iniciar Sesion');
            redirect('/Inicio');
        }
    }
    public function AgregarMensaje()
    {
        $nombre = $this->input->post('nombre');
        $correo = $this->input->post('correo');
        $descripcion = $this->input->post('descripcion');
        $tipo_mensaje = $this->input->post('tipo_mensaje');
        $mensaje = $this->input->post('mensaje');
        if (empty($nombre) || empty($correo) || empty($mensaje) || empty($descripcion) || empty($tipo_mensaje)) {
            $this->session->set_flashdata('mensaje', 'TODOS LOS CAMPOS SON OBLIGATORIOS');
            redirect('/Contacto');
        } else {
            $men = array(
                "nombre" => $nombre,
                "correo" => $correo,
                "tipo_mensaje" => $tipo_mensaje,
                "descripcion" => $descripcion,
                "mensaje" => $mensaje
            );
            if ($this->administrador_model->AgregarMensaje($men)) {
                $this->session->set_flashdata('mensaje', 'MENSAJE ENVIADO CORRECTAMENTE');
                redirect('/Contacto');
            } else {
                $this->session->set_flashdata('mensaje', 'ERROR AL MANDAR EL MENSAJE');
                redirect('/Contacto');
            }
        }
    }
    public function EliminarMensaje()
    {
        $IdMensaje = $this->input->post('id_mensaje');
        if ($this->administrador_model->EliminarMensaje($IdMensaje) == false) {
            $this->session->set_flashdata('mensaje', 'NO SE ENCUENTRA EL MENSAJE');
            redirect('/Administrador/Mensajes');
        } else {
            $this->session->set_flashdata('mensaje', 'MENSAJE ELIMINDADO');
            redirect('/Administrador/Mensajes');
        }
    }
    public function VerMensaje($IdMensaje)
    {
        
        
        if ($this->ion_auth->logged_in()) {
            $data['usuario'] = $this->ion_auth->user()->row();
            if ($this->administrador_model->VerMensaje($IdMensaje) != null) {
                $data['mensaje'] = $this->administrador_model->VerMensaje($IdMensaje);
                $this->load->view('administrador/Header', $data);
                $this->load->view('administrador/Styles');
                $this->load->view('administrador/NavBar');
                $this->load->view('administrador/Mensaje', $data);
                $this->load->view('public/Footer');
                $this->load->view('administrador/Scripts');
            } else {
                $this->session->set_flashdata('mensaje', 'Mensaje No Encontrado');
                redirect('/Administrador/Mensajes');
            }
        } else {
            $this->session->set_flashdata('mensaje', 'Necesitas Iniciar Sesion');
            redirect('/Inicio');
        }
    }
}
