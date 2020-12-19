<?php
class Admin extends CI_Controller
{
    public function index()
    {
        // judul halaman
        $data['title'] = 'Dashboard';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $this->load->view('menu_admin/templates/header', $data);
        $this->load->view('menu_admin/templates/sidebar', $data);
        $this->load->view('menu_admin/templates/topbar', $data);
        $this->load->view('menu_admin/admin/index', $data);
        $this->load->view('menu_admin/templates/footer');
    }
}
