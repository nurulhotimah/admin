<?php

class Guru extends CI_Controller
{
    public function index()
    {
        // title
        $data['title'] = 'Data Pendidik';

        // mengambil data session

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['guru'] = $this->m_guru->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelola_data/guru/guru', $data);
        $this->load->view('templates/footer');
    }
}
