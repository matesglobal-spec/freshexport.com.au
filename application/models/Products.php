<?php
class Products extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function record_count($where,$table) {
        $this->db->select('*')->from($table)->WHERE($where);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function fetch_products($where,$limit, $start,$table) {
        $query= $this->db->select('*')->from($table)->WHERE($where)->order_by('id','desc')->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}
