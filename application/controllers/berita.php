<?php
class Berita extends CI_Controller
{
    public function index()
    {
        // untuk title
        $data['title'] = 'Berita';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // untuk menampilkan data dari database
        $data['berita'] = $this->m_berita->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelola_data/berita/berita', $data);
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

        $this->m_berita->input_data($data, 'berita');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('berita/index');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_berita->hapus_data($where, 'berita');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('berita/index');
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
        $judul          = $this->input->post('judul');
        $tanggal        = $this->input->post('tanggal');
        $gambar         = $_FILES['gambar'];
        if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/foto/';
            

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = ['berita']['gambar'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/foto/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }

        // if ($gambar = '') {
        // } else {
        //     $config['upload_path'] = './assets/foto';
        //     $config['allowed_types'] = 'jpg|png|give';

        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('gambar')) {
        //         echo "Upload Gagal";
        //         die();
        //     } else {
        //         $gambar = $this->upload->data('file_name');
        //     }
        // }





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


    // untuk menampilkan data pada option detail
    public function detail($id)
    {
        // untuk title
        $data['title'] = 'Detail';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('m_berita');
        $detail = $this->m_berita->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelola_data/berita/detail', $data);
        $this->load->view('templates/footer');
    }
}
