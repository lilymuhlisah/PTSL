<?php

class M_Desa extends CI_Model
{
    public function getKecamatan()
    {
        return $this->db->get('kecamatan')->result_array();
    }


    public function getDesa($id_kecamatan)
    {
        return $this->db->where('id_kecamatan', $id_kecamatan)->get('desa')->result_array();
    }


    public function listDesa()
    {
        $query = $this->db->query("SELECT * FROM `desa` 
            JOIN `kecamatan` ON desa.id_kecamatan = kecamatan.id_kecamatan");
        return $query->result_array();
    }


    public function getListDesa($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_desa', $keyword);
            $this->db->or_like('nama_kecamatan', $keyword);
        }

        $this->db->select('*');
        $this->db->from('desa');
        $this->db->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan');
        return $this->db->limit($limit, $start)->get()->result_array();
    }

    public function countDesa()
    {
        return $this->db->get('desa')->num_rows();
    }
}
