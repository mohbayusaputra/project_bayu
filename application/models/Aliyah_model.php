<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Aliyah_model extends CI_Model
{
    public $table = 'forma';
    public $id = 'forma.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from('forma a');
        $this->db->where('a.id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data) {
        $this->db->insert('forma', $data);
        echo $this->db->last_query();  // Menampilkan pernyataan SQL terakhir
        return $this->db->insert_id(); // Mengembalikan ID dari data yang baru saja disisipkan
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

}
?>