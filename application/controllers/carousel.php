<?php
class Carousel extends CI_Controller
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
        $data['title'] = 'Slider';

        // mengambil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //memanggil model tampil data
        $data['carousel'] = $this->m_carousel->tampil_data()->result();

        // memanggil templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/carousel/index', $data);
        $this->load->view('templates/footer');
    }

    // untuk tambah data
    public function tambah_aksi()
    {
        $id                 = $this->input->post('id');
        $title_1            = $this->input->post('title_1');
        $title_2            = $this->input->post('title_2');
        $title_3            = $this->input->post('title_3');
        $button             = $this->input->post('button');
        $image             = $_FILES['image'];

        if ($image = '') {
        } else {
            $config['upload_path'] = './assets/foto/carousel';
            $config['allowed_types'] = 'jpg|png|give';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "Upload Gagal";
                die();
            } else {
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'title-1'             => $title_1,
            'title-2'             => $title_2,
            'title-3'             => $title_3,
            'button'              => $button,
            'image'               => $image



        );

        $this->m_carousel->input_data($data, 'berita');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('berita/index');
    }

    // untuk edit data
    public function edit($id)
    {

        $where = array('id' => $id);
        $data['title'] = 'Edit Carousel';

        // memanggil data session
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['berita'] = $this->m_carousel->edit_data($where, 'carousel')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu_admin/kelola_data/carousel/edit', $data);
        $this->load->view('templates/footer');
    }




    // untuk mengubah data dari view edit
    public function update()
    {
        $id                 = $this->input->post('id');
        $title_1            = $this->input->post('title-1');
        $title_2            = $this->input->post('title-2');
        $button             = $this->input->post('button');
        $image             = $_FILES['image'];

        if ($image = '') {
        } else {
            $config['upload_path'] = './assets/foto/carousel';
            $config['allowed_types'] = 'jpg|png|give';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $new_img = $this->upload->data('file_name');
                $this->db->set('image', $new_img);

                $id                 = $this->input->post('id');
                $title_1            = $this->input->post('title-1');
                $title_2            = $this->input->post('title-2');
                $button             = $this->input->post('button');

                $data = array(

                    'title-1'             => $title_1,
                    'title-2'             => $title_2,
                    'button'              => $button,
                    'image'               => $image

                );


                $where = array(
                    'id'            => $id
                );
                $this->m_carousel->update_data($where, $data, 'carousel');
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('carousel/index');
            } else {
                $image = $this->upload->data('file_name');
            }
        }






        $data = array(

            'title-1'             => $title_1,
            'title-2'             => $title_2,
            'button'              => $button,
            'image'               => $image

        );


        $where = array(
            'id'            => $id
        );
        $this->m_carousel->update_data($where, $data, 'carousel');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('carousel/index');
    }
}
