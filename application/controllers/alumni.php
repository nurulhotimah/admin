<?php
class ALumni extends CI_Controller
{
    public function index()
    {
        // untuk title
        $data['title'] = 'Alumni';

        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //memanggil model tampil data
        $data['berita'] = $this->m_berita->tampil_data()->result();

        // memanggil templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/alumni/index', $data);
        $this->load->view('templates/footer');
    }

    // untuk tambah data
    public function tambah_aksi()
    {
        $id             = $this->input->post('id');
        $nama          = $this->input->post('nama');
        $tempat_bekerja       = $this->input->post('tempat_bekerja');
        $pesan_kesan          = $this->input->post('pesan_kesan');
        $foto                 = $_FILES['foto'];

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
            'nama'              => $nama,
            'tempat_bekerja'    => $tempat_bekerja,
            'pesan_kesan'       => $pesan_kesan,
            'foto'            => $foto,


        );

        $this->m_alumni->input_data($data, 'alumni');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('alumni/index');
    }

    // untuk hapus data
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_alumni->hapus_data($where, 'alumni');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('alumni/index');
    }


    // untuk edit data
    public function edit($id)
    {

        $where = array('id' => $id);
        $data['title'] = 'ubah berita';

        // memanggil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['berita'] = $this->m_berita->edit_data($where, 'berita')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/alumni/edit', $data);
        $this->load->view('templates/footer');
    }




    // untuk mengubah data dari view edit
    public function update()
    {
        $id             = $this->input->post('id');
        $nama          = $this->input->post('nama');
        $tempat_bekerja        = $this->input->post('tempat_bekerja');
        $pesan_kesan          = $this->input->post('pesan_kesan');
        $foto         = $_FILES['foto'];

        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|give';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $new_img = $this->upload->data('file_name');
                $this->db->set('foto', $new_img);

                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }






        $data = array(


            'nama'              => $nama,
            'tempat_bekerja'    => $tempat_bekerja,
            'pesan_kesan'       => $pesan_kesan,
            'foto'            => $foto,

        );


        $where = array(
            'id'            => $id
        );
        $this->m_alumni->update_data($where, $data, 'alumni');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('alumni/index');
    }


    // untuk menampilkan data pada option detail
    public function detail($id)
    {
        // untuk title
        $data['title'] = 'Detail';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('m_alumni');
        $detail = $this->m_alumni->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/alumni/detail', $data);
        $this->load->view('templates/footer');
    }
}
