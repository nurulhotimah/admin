<?php

class Prestasi extends CI_Controller
{
    public function index()
    {
        // title
        $data['title'] = 'Prestasi';

        // mengambil data session

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // untuk menampilkan data
        $data['guru'] = $this->m_prestasi->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/prestasi/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $id               = $this->input->post('id');
        $title_1          = $this->input->post('title-1');
        $title_2          = $this->input->post('title-2');
        $tanggal          = $this->input->post('tanggal');
        $foto           = $_FILES['foto'];

        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|give';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id'                => $id,
            'title-1'               => $title_1,
            'title-2'              => $title_2,
            'tanggal'           => $tanggal,
            'foto'              => $foto



        );

        $this->m_prestasi->input_data($data, 'prestasi');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('prestasi/index');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_prestasi->hapus_data($where, 'prestasi');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('prestasi/index');
    }
    public function edit($id)
    {

        $where = array('id' => $id);
        $data['title'] = 'Ubah Data Prestasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->m_prestasi->edit_data($where, 'prestasi')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/prestasi/edit', $data);
        $this->load->view('templates/footer');
    }
    // untuk mengubah data dari view edit
    public function update()
    {
        $id               = $this->input->post('id');
        $title_1          = $this->input->post('title-1');
        $title_2          = $this->input->post('title-2');
        $tanggal          = $this->input->post('tanggal');
        $foto           = $_FILES['foto'];

        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|give';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }





        $data = array(

            'id'                => $id,
            'title-1'           => $title_1,
            'title-2'           => $title_2,
            'tanggal'           => $tanggal,
            'foto'              => $foto


        );


        $where = array(
            'id'            => $id
        );
        $this->m_prestasi->update_data($where, $data, 'prestasi');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('guru/index');
    }

    public function detail($id)
    {

        $data['title'] = 'Detail';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // untuk menampilkan data dari database
        $this->load->model('m_prestasi');
        $detail = $this->m_prestasi->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/prestasi/detail', $data);
        $this->load->view('templates/footer');
    }
}
