<?php
class Galeri extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        // untuk title
        $data['title'] = 'Galeri';

        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //memanggil model tampil data
        $data['galeri'] = $this->m_galeri->tampil_data()->result();

        // memanggil templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/galeri/galeri', $data);
        $this->load->view('templates/footer');
    }

    // untuk tambah data
    public function tambah_aksi()
    {
        $id             = $this->input->post('id');
        $judul          = $this->input->post('judul');
        $tanggal        = $this->input->post('tanggal');
        $gambar         = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/foto/galeri/';
            $config['allowed_types'] = 'jpg|png|give';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $deskripsi        = $this->input->post('deskripsi');

        $data = array(
            'id'                => $id,
            'judul'             => $judul,
            'tanggal'           => $tanggal,
            'gambar'            => $gambar,
            'deskripsi'         => $deskripsi


        );

        $this->m_galeri->input_data($data, 'galeri');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('galeri/index');
    }

    // untuk hapus data
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_galeri->hapus_data($where, 'galeri');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('galeri/index');
    }


    // untuk edit data
    public function edit($id)
    {

        $where = array('id' => $id);
        $data['title'] = 'Edit Galeri';

        // memanggil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['galeri'] = $this->m_galeri->edit_data($where, 'galeri')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/galeri/edit', $data);
        $this->load->view('templates/footer');
    }




    // untuk mengubah data dari view edit
    public function update()
    {
        $id             = $this->input->post('id');
        $judul          = $this->input->post('judul');
        $tanggal        = $this->input->post('tanggal');
        $gambar         = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/foto/galeri/';
            $config['allowed_types'] = 'jpg|png|give';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $new_img = $this->upload->data('file_name');
                $this->db->set('gambar', $new_img);

                $id             = $this->input->post('id');
                $judul          = $this->input->post('judul');
                $tanggal        = $this->input->post('tanggal');

                $data = array(

                    'judul'             => $judul,
                    'tanggal'           => $tanggal,
                    'gambar'            => $gambar

                );


                $where = array(
                    'id'            => $id
                );
                $this->m_galeri->update_data($where, $data, 'galeri');
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('galeri/index');
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
        $this->m_galeri->update_data($where, $data, 'galeri');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('berita/index');
    }


    // untuk menampilkan data pada option detail
    public function detail($id)
    {
        // untuk title
        $data['title'] = 'Detail';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('m_galeri');
        $detail = $this->m_galeri->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/galeri/detail', $data);
        $this->load->view('templates/footer');
    }
}
