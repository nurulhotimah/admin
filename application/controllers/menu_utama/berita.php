<?php
class Berita extends CI_Controller
{
    public function index()
    {

        $data['berita'] = $this->m_berita->read()->result();

        // memanggil templates

        $this->load->view('menu_utama/berita', $data);
    }
}
