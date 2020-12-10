<?php

class Guru extends CI_Controller
{
    public function index()
    {
        // title
        $data['title'] = 'Data Pendidik';

        // mengambil data session

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // untuk menampilkan data
        $data['guru'] = $this->m_guru->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelola_data/guru/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $id             = $this->input->post('id');
        $nip          = $this->input->post('nip');
        $nama        = $this->input->post('nama');
        $gambar         = $_FILES['foto'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|give';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $bidang         = $this->input->post('bidang');

        $data = array(
            'id'                => $id,
            'nip'               => $nip,
            'nama'              => $nama,
            'foto'              => $gambar,
            'bidang'            => $bidang


        );

        $this->m_guru->input_data($data, 'guru');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('guru/index');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_berita->hapus_data($where, 'guru');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('guru/index');
    }
    public function edit($id)
    {

        $where = array('id' => $id);
        $data['title'] = 'ubah berita';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->m_berita->edit_data($where, 'berita')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelola_data/berita/edit', $data);
        $this->load->view('templates/footer');
    }
    // untuk mengubah data dari view edit
    public function update()
    {
        $id             = $this->input->post('id');
        $judul          = $this->input->post('nip');
        $tanggal        = $this->input->post('nama');
        $gambar         = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|give';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }





        $data = array(

            'judul'             => $judul,
            'tanggal'           => $tanggal,
            'gambar'            => $gambar



        );


        $where = array(
            'id'            => $id
        );
        $this->m_berita->update_data($where, $data, 'berita');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('berita/index');
    }
}
