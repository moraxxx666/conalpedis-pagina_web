<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rutas extends CI_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->load->model('administrador_model', '', TRUE);
    }

    public function Index($pagina = 'Inicio')
    {

        if (!file_exists(APPPATH . 'views/public/' . $pagina . '.php')) {
            show_404();
        }

        $data['titulo'] = ucfirst($pagina);
        if ($pagina == 'Inicio') {
            $data['colecciones'] = $this->administrador_model->ObtenerNoticias();
        }
        $this->load->view('public/Header', $data);
        $this->load->view('public/Styles');
        $this->load->view('public/FloatingButton');
        $this->load->view('public/NavBar');
        $this->load->view('public/' . $pagina,$data);
        $this->load->view('public/Aside');
        $this->load->view('public/Footer');
        $this->load->view('public/Scripts');
    }
}
