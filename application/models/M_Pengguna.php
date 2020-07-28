<?php

class M_Pengguna extends CI_Model
{
    public function registerUser($data)
    {
        // $id_instansi = $this->db->insert_id();
        // $u_pengguna['id_instansi'] = $id_instansi;

        $this->db->insert('u_pengguna', $data);
    }

    public function getUserKantah()
    {
        $query = $this->db->query("SELECT * FROM `u_pengguna`
            JOIN `u_role` ON u_pengguna.id_role = u_role.id_role
            WHERE u_pengguna.id_role = 1");
        return $query->result_array();
    }

    public function detailUserKantah($id_pengguna)
    {
        $query = $this->db->query("SELECT * FROM `u_pengguna`
                JOIN `u_role` ON u_pengguna.id_role = u_role.id_role
                WHERE u_pengguna.id_pengguna = $id_pengguna");
        return $query->row_array();
    }

    public function add_UserKantah($data)
    {
        $this->db->insert('u_pengguna', $data);
    }

    public function editUser($data)
    {
        $this->db->where('id_pengguna', $this->input->post('id_pengguna'));
        $this->db->update('u_pengguna', $data);
    }

    public function deleteUser($id_pengguna)
    {
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->delete('u_pengguna');
    }

    //USER DESA
    public function getUserDesa()
    {
        $query = $this->db->query("SELECT * FROM `u_pengguna`
            JOIN `u_role` ON u_pengguna.id_role = u_role.id_role
            JOIN `desa` ON u_pengguna.id_desa = desa.id_desa
            JOIN `kecamatan` ON desa.id_kecamatan = kecamatan.id_kecamatan
            WHERE u_pengguna.id_role = 2");
        return $query->result_array();
    }

    public function detailUserDesa($id_pengguna)
    {
        $query = $this->db->query("SELECT * FROM `u_pengguna`
                JOIN `u_role` ON u_pengguna.id_role = u_role.id_role
                JOIN `desa` ON u_pengguna.id_desa = desa.id_desa
                JOIN `kecamatan` ON desa.id_kecamatan = kecamatan.id_kecamatan
                WHERE u_pengguna.id_pengguna = $id_pengguna");
        return $query->row_array();
    }

    public function getUserLogin()
    {
        return $this->db->get_where('u_pengguna', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function getUserLoginDesa()
    {
        $this->db->select('*');
        $this->db->from('u_pengguna');
        $this->db->join('desa', 'u_pengguna.id_desa = desa.id_desa');
        $this->db->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan');
        $this->db->where('u_pengguna.username', $this->session->userdata('username'));

        return $this->db->get()->row_array();
    }
}
