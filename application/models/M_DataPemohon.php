<?php

class M_DataPemohon extends CI_Model
{

    public function getPemohon($id_desa)
    {
        return $this->db->get_where('pemohon', ['id_desa' => $id_desa])->result_array();
    }

    public function getPemohonByDesa($id_desa)
    {
        $query = $this->db->query("SELECT * FROM `pemohon` 
            JOIN `desa` ON pemohon.id_desa = desa.id_desa 
            WHERE pemohon.id_desa = $id_desa");
        return $query->result_array();
    }


    public function addPemohon($pemohon)
    {
        $this->db->insert('pemohon', $pemohon);
    }


    public function deletePemohon($id_pemohon)
    {
        $this->db->where('id_pemohon', $id_pemohon);
        $this->db->delete('pemohon');
    }

    public function detailPemohon($id_pemohon)
    {
        $query = $this->db->query("SELECT * FROM `pemohon` 
            JOIN `desa` ON pemohon.id_desa = desa.id_desa 
            JOIN `kecamatan` ON desa.id_kecamatan = kecamatan.id_kecamatan
            WHERE id_pemohon = $id_pemohon");
        return $query->row_array();
    }

    public function editPemohon($pemohon)
    {

        $this->db->where('id_pemohon', $this->input->post('id_pemohon'));
        $this->db->update('pemohon', $pemohon);
    }
}
