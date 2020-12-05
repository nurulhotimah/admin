<?php
class Galeri extends CI_Controller
{
    public  function index()
    {
        $data['title'] = 'Galeri';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // untuk menampilkan data dari database
        $data['galeri'] = $this->m_galeri->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelola_data/galeri', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $id             = $this->input->post('id');
        $judul          = $this->input->post('judul');
        $tanggal        = $this->input->post('tanggal');
        $gambar         = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|give';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id'                => $id,
            'judul'             => $judul,
            'tanggal'           => $tanggal,
            'gambar'            => $gambar,


        );

        $this->m_galeri->input_data($data, 'galeri');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('galeri/index');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_galeri->hapus_data($where, 'galeri');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('galeri/index');
    }
}
