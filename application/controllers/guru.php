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
        $data['title'] = 'ubah data pendidik';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->m_guru->edit_data($where, 'guru')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelola_data/guru/edit', $data);
        $this->load->view('templates/footer');
    }
    // untuk mengubah data dari view edit
    public function update()
    {
        $id             = $this->input->post('id');
        $nip            = $this->input->post('nip');
        $nama           = $this->input->post('nama');
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


        $where = array(
            'id'            => $id
        );
        $this->m_berita->update_data($where, $data, 'guru');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('guru/index');
    }

    public function detail($id)
    {

        $data['title'] = 'Detail';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // untuk menampilkan data dari database
        $this->load->model('m_guru');
        $detail = $this->m_guru->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelola_data/guru/detail', $data);
        $this->load->view('templates/footer');
    }
}
