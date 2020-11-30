<?php
class Galeri extends CI_Controller
{
    public  function index()
    {
        $data['title'] = 'Galei';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // untuk menampilkan data dari database
        $data['berita'] = $this->m_berita->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelola_data/galeri');
        $this->load->view('templates/footer');
    }
}
