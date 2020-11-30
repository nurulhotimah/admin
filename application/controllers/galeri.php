<?php
class Galeri extends CI_Controller
{
    public  function index()
    {
        $data['title'] = 'Galei';
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelola_data/galeri');
        $this->load->view('templates/footer');
    }
}
