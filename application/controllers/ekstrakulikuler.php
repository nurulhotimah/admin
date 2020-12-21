<?php
class Ekstrakulikuler extends CI_Controller
{
    public function index()
    {
        // untuk title
        $data['title'] = 'Ekstrakulikuler';

        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //memanggil model tampil data
        $data['berita'] = $this->m_ekstrakulikuler->tampil_data()->result();

        // memanggil templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/ekstrakulikuler/index', $data);
        $this->load->view('templates/footer');
    }

    // untuk tambah data
    public function tambah_aksi()
    {
        $id             = $this->input->post('id');
        $nama           = $this->input->post('nama');
        $pembina        = $this->input->post('pembina');
        $ketua          = $this->input->post('ketua');
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
            'nama'              => $nama,
            'pembina'           => $pembina,
            'ketua'             => $ketua,
            'foto'              => $foto


        );

        $this->m_berita->input_data($data, 'ekstrakulikuler');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('ekstrakulikuler/index');
    }

    // untuk hapus data
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_berita->hapus_data($where, 'ekstrakulikuler');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('ekstrakulikuler/index');
    }


    // untuk edit data
    public function edit($id)
    {

        $where = array('id' => $id);
        $data['title'] = 'Edit Ekstrakulikuler';

        // memanggil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['berita'] = $this->m_ekstrakulikuler->edit_data($where, 'ekstrakulikuler')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/ekstrakulikuler/edit', $data);
        $this->load->view('templates/footer');
    }




    // untuk mengubah data dari view edit
    public function update()
    {
        $id             = $this->input->post('id');
        $nama           = $this->input->post('nama');
        $pembina        = $this->input->post('pembina');
        $ketua          = $this->input->post('ketua');
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
            'nama'              => $nama,
            'pembina'           => $pembina,
            'ketua'             => $ketua,
            'foto'              => $foto

        );


        $where = array(
            'id'            => $id
        );
        $this->m_berita->update_data($where, $data, 'ekstrakulikuler');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('ekstrakulikuler/index');
    }


    // untuk menampilkan data pada option detail
    public function detail($id)
    {
        // untuk title
        $data['title'] = 'Detail';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('m_ekstrakulikuler');
        $detail = $this->m_ekstrakulikuler->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/ekstrakulikuler/detail', $data);
        $this->load->view('templates/footer');
    }
}
