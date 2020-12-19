<?php
class Menu_utama extends CI_Controller
{
    public function index()
    {

        $data['berita'] = $this->m_berita->tampil_data()->result();

        // memanggil templates

        $this->load->view('menu_utama/index', $data);
    }
}
