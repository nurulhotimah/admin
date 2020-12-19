<?php
class Profile extends CI_Controller
{
    public function index()
    {
        // untuk title
        $data['title'] = 'Profile';

        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //memanggil model tampil data
        $data['berita'] = $this->m_profile->tampil_data()->result();

        // memanggil templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelola_data/profile/index', $data);
        $this->load->view('templates/footer');
    }

    // untuk tambah data
    public function tambah_aksi()
    {
        $id             = $this->input->post('id');
        $judul          = $this->input->post('judul');


        $data = array(
            'id'                => $id,
            'judul'             => $judul,



        );

        $this->m_berita->input_data($data, 'profile');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('profile/index');
    }

    // untuk hapus data
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_berita->hapus_data($where, 'profile');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('berita/index');
    }


    // untuk edit data
    public function edit($id)
    {

        $where = array('id' => $id);
        $data['title'] = 'Ubah Profile';

        // memanggil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['berita'] = $this->m_profile->edit_data($where, 'profile')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelola_data/berita/edit', $data);
        $this->load->view('templates/footer');
    }




    // untuk mengubah data dari view edit
    public function update()
    {
        $id             = $this->input->post('id');
        $judul          = $this->input->post('judul');







        $data = array(

            'judul'             => $judul,

        );


        $where = array(
            'id'            => $id
        );
        $this->m_profile->update_data($where, $data, 'profile');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('profile/index');
    }


    // untuk menampilkan data pada option detail
    public function detail($id)
    {
        // untuk title
        $data['title'] = 'Detail';
        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('m_profile');
        $detail = $this->m_berita->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelola_data/profile/detail', $data);
        $this->load->view('templates/footer');
    }
}
