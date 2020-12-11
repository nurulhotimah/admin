<?php
class M_berita extends CI_Model
{
    public function tampil_data()
    {
        // nampilin data
        return $this->db->get('berita');
    }
    // input ke database
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('berita', array('id' => $id))->row();
        return $query;
    }
}
