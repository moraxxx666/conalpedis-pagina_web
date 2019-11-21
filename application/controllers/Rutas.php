<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rutas extends CI_Controller
{ 

    public function Index($pagina = 'Inicio'){
        
        if(!file_exists(APPPATH.'views/public/'.$pagina.'.php')){
            show_404();
        }

        $data['titulo'] = ucfirst($pagina);
        $this->load->view('public/Header',$data);
        $this->load->view('public/Styles');
        $this->load->view('public/NavBar');
        $this->load->view('public/'.$pagina);
        $this->load->view('public/Aside');
        $this->load->view('public/Footer');
        $this->load->view('public/Scripts');


    }

}
