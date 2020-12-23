<?php
class Lihat_berita extends CI_Controller
{
    public function index()
    {

        $data['berita'] = $this->m_berita->read()->result();


        // memanggil templates\
        $this->load->view('page_info/header_info');
        $this->load->view('page_info/sambutan_kepsek');
        $this->load->view('page_info/menu_kanan_info');
        $this->load->view('page_info/lihat_berita', $data);
        // $this->load->view('page_info/contact_info');
        $this->load->view('page_info/footer_info');
    }
}
