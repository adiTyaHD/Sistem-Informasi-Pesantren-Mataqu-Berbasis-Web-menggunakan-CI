<?php
class News_model extends CI_Model
{
    public function getAllberita()
    {
        return $this->db->get('berita')->result_array();
    }
    public function getBerita($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('judul', $keyword);
        }
        $this->db->order_by('date_created', 'DESC');
        return $this->db->get_where('berita', ['kategori' => 1], $limit, $start, $keyword)->result_array();
    }
    public function getBerita1($limit, $start)
    {
        $this->db->order_by('date_created', 'DESC');
        return $this->db->get_where('berita', ['kategori' => 3], $limit, $start)->result_array();
    }
    public function getBerita2($limit, $start)
    {
        $this->db->order_by('date_created', 'DESC');
        return $this->db->get_where('berita', ['kategori' => 2], $limit, $start)->result_array();
    }
    public function countAllBerita1()
    {
        return $this->db->get_where('berita', ['kategori' => 1])->num_rows();
    }
    public function countAllBerita2()
    {
        return $this->db->get_where('berita', ['kategori' => 3])->num_rows();
    }
    public function countAllBerita3()
    {
        return $this->db->get_where('berita', ['kategori' => 2])->num_rows();
    }
}
