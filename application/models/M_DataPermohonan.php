<?php

class M_DataPermohonan extends CI_Model
{
    public function getPermohonan($id_pemohon)
    {
        return $this->db->get_where('permohonan', ['id_pemohon' => $id_pemohon])->result_array();
    }

    public function getKegiatan()
    {
        return $this->db->get('kegiatan')->result_array();
    }

    public function addPermohonan($permohonan, $spptpajak, $letak_tanah, $letterc, $suratukur, $di201, $di202, $di208, $di300, $di302, $di305, $di307, $ktp, $kk, $bphtb, $dokbatas, $doktambahan)
    {
        $this->db->insert('letak_tanah', $letak_tanah);
        $this->db->insert('spptpajak', $spptpajak);
        $this->db->insert('letterc', $letterc);
        $this->db->insert('suratukur', $suratukur);
        $this->db->insert('di201', $di201);
        $this->db->insert('di202', $di202);
        $this->db->insert('di208', $di208);
        $this->db->insert('di300', $di300);
        $this->db->insert('di302', $di302);
        $this->db->insert('di305', $di305);
        $this->db->insert('di307', $di307);
        $this->db->insert('dokumen_ktp', $ktp);
        $this->db->insert('dokumen_kk', $kk);
        $this->db->insert('bphtb', $bphtb);
        $this->db->insert('dokumen_batas', $dokbatas);
        $this->db->insert('dokumen_tambahan', $doktambahan);

        $id_dok = $this->db->insert_id();

        $permohonan['id_letaktanah'] = $id_dok;
        $permohonan['id_sppt'] = $id_dok;
        $permohonan['id_letterc'] = $id_dok;
        $permohonan['id_su'] = $id_dok;
        $permohonan['id_di201'] = $id_dok;
        $permohonan['id_di202'] = $id_dok;
        $permohonan['id_di208'] = $id_dok;
        $permohonan['id_di300'] = $id_dok;
        $permohonan['id_di302'] = $id_dok;
        $permohonan['id_di305'] = $id_dok;
        $permohonan['id_di307'] = $id_dok;
        $permohonan['id_dokumenktp'] = $id_dok;
        $permohonan['id_dokumenkk'] = $id_dok;
        $permohonan['id_bphtb'] = $id_dok;
        $permohonan['id_dokumenbatas'] = $id_dok;
        $permohonan['id_doktambahan'] = $id_dok;

        $this->db->insert('permohonan', $permohonan);
    }

    public function detailPermohonan($id_permohonan)
    {
        $query = $this->db->query("SELECT * FROM `permohonan`
        LEFT JOIN `pemohon` ON permohonan.id_pemohon = pemohon.id_pemohon
        LEFT JOIN `letak_tanah` ON permohonan.id_letaktanah = letak_tanah.id_letaktanah
        LEFT JOIN `kegiatan` ON permohonan.id_kegiatan = kegiatan.id_kegiatan
        LEFT JOIN `spptpajak` ON permohonan.id_sppt = spptpajak.id_sppt
        LEFT JOIN `letterc` ON permohonan.id_letterc = letterc.id_letterc
        LEFT JOIN `suratukur` ON permohonan.id_su = suratukur.id_su
        LEFT JOIN `di201` ON permohonan.id_di201 = di201.id_di201
        LEFT JOIN `di202` ON permohonan.id_di202 = di202.id_di202
        LEFT JOIN `di208` ON permohonan.id_di208 = di208.id_di208
        LEFT JOIN `di300` ON permohonan.id_di300 = di300.id_di300
        LEFT JOIN `di302` ON permohonan.id_di302 = di302.id_di302
        LEFT JOIN `di305` ON permohonan.id_di305 = di305.id_di305
        LEFT JOIN `di307` ON permohonan.id_di307 = di307.id_di307
        LEFT JOIN `status` ON permohonan.id_status = status.id_status 
        LEFT JOIN `dokumen_ktp` ON permohonan.id_dokumenktp = dokumen_ktp.id_dokumenktp 
        LEFT JOIN `dokumen_kk`ON permohonan.id_dokumenkk = dokumen_kk.id_dokumenkk 
        LEFT JOIN `bphtb`ON permohonan.id_bphtb = bphtb.id_bphtb
        LEFT JOIN `dokumen_batas`ON permohonan.id_dokumenbatas = dokumen_batas.id_dokumenbatas
        LEFT JOIN `dokumen_tambahan`ON permohonan.id_doktambahan = dokumen_tambahan.id_doktambahan 
        WHERE permohonan.id_permohonan = $id_permohonan");
        return $query->row_array();
    }

    public function editPermohonan($permohonan, $spptpajak, $letak_tanah, $letterc, $suratukur, $di201, $di202, $di208, $di300, $di302, $di305, $di307, $ktp, $kk, $bphtb, $dokbatas, $doktambahan, $id_permohonan)
    {
        $this->db->where("`spptpajak`.id_sppt = (SELECT id_sppt FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('spptpajak', $spptpajak);

        $this->db->where("`letak_tanah`.id_letaktanah = (SELECT id_letaktanah FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('letak_tanah', $letak_tanah);

        $this->db->where("`letterc`.id_letterc = (SELECT id_letterc FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('letterc', $letterc);

        $this->db->where("`di300`.id_di300 = (SELECT id_di300 FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('di300', $di300);

        $this->db->where("`di302`.id_di302 = (SELECT id_di302 FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('di302', $di302);

        $this->db->where("`di305`.id_di305 = (SELECT id_di305 FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('di305', $di305);

        $this->db->where("`di201`.id_di201 = (SELECT id_di201 FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('di201', $di201);

        $this->db->where("`di202`.id_di202 = (SELECT id_di202 FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('di202', $di202);

        $this->db->where("`suratukur`.id_su = (SELECT id_su FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('suratukur', $suratukur);

        $this->db->where("`di307`.id_di307 = (SELECT id_di307 FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('di307', $di307);

        $this->db->where("`di208`.id_di208 = (SELECT id_di208 FROM `permohonan`
        WHERE permohonan.id_permohonan = $id_permohonan)");
        $this->db->update('di208', $di208);

        if ($ktp !== null) {
            $this->db->where("`dokumen_ktp`.id_dokumenktp = (SELECT id_dokumenktp FROM `permohonan`
            WHERE permohonan.id_permohonan = $id_permohonan)");
            $this->db->update('dokumen_ktp', $ktp);
        }

        if ($kk !== null) {
            $this->db->where("`dokumen_kk`.id_dokumenkk = (SELECT id_dokumenkk FROM `permohonan`
            WHERE permohonan.id_permohonan = $id_permohonan)");
            $this->db->update('dokumen_kk', $kk);
        }

        if ($bphtb !== null) {
            $this->db->where("`bphtb`.id_bphtb = (SELECT id_bphtb FROM `permohonan`
            WHERE permohonan.id_permohonan = $id_permohonan)");
            $this->db->update('bphtb', $bphtb);
        }

        if ($dokbatas !== null) {
            $this->db->where("`dokumen_batas`.id_dokumenbatas = (SELECT id_dokumenbatas FROM `permohonan`
            WHERE permohonan.id_permohonan = $id_permohonan)");
            $this->db->update('dokumen_batas', $dokbatas);
        }

        if ($doktambahan !== null) {
            $this->db->where("`dokumen_tambahan`.id_doktambahan = (SELECT id_doktambahan FROM `permohonan`
            WHERE permohonan.id_permohonan = $id_permohonan)");
            $this->db->update('dokumen_tambahan', $doktambahan);
        }


        $this->db->where('id_permohonan', $this->input->post('id_permohonan'));
        $this->db->update('permohonan', $permohonan);
    }

    public function updateStatus($id_permohonan, $id_statusktp, $id_statuskk, $id_statusbphtb, $id_statusdokbatas, $id_statusdoktambahan)
    {
        $status_ktp = $id_statusktp;
        $status_kk = $id_statuskk;
        $status_bphtb = $id_statusbphtb;
        $status_dokbatas = $id_statusdokbatas;
        $status_doktambahan = $id_statusdoktambahan;

        if ($status_ktp == 1 && $status_kk == 1 && $status_bphtb == 1 && $status_dokbatas == 1 && $status_doktambahan == 1) {
            $this->db->set('id_status', 1);
            $this->db->where('id_permohonan', $id_permohonan);
            $this->db->update('permohonan');
        } elseif ($status_ktp == 2 && $status_kk == 2 && $status_bphtb == 2 && $status_dokbatas == 2 && $status_doktambahan == 2) {
            $this->db->set('id_status', 3);
            $this->db->where('id_permohonan', $id_permohonan);
            $this->db->update('permohonan');
        } else {
            $this->db->set('id_status', 2);
            $this->db->where('id_permohonan', $id_permohonan);
            $this->db->update('permohonan');
        }
    }

    public function verifikasiBerkas($ktp, $kk, $bphtb, $dokumen_batas, $dokumen_tambahan, $permohonan)
    {
        $this->db->where('id_dokumenktp', $this->input->post('id_dokumenktp'));
        $this->db->update('dokumen_ktp', $ktp);

        $this->db->where('id_dokumenkk', $this->input->post('id_dokumenkk'));
        $this->db->update('dokumen_kk', $kk);

        $this->db->where('id_bphtb', $this->input->post('id_bphtb'));
        $this->db->update('bphtb', $bphtb);

        $this->db->where('id_dokumenbatas', $this->input->post('id_dokumenbatas'));
        $this->db->update('dokumen_batas', $dokumen_batas);

        $this->db->where('id_doktambahan', $this->input->post('id_doktambahan'));
        $this->db->update('dokumen_tambahan', $dokumen_tambahan);

        // $this->db->set('keterangan', $permohonan['keterangan'])
        //     ->where('id_permohonan', $permohonan['id_permohonan'])
        //     ->update('permohonan');

        $this->db->where('id_permohonan', $this->input->post('id_permohonan'));
        $this->db->update('permohonan', $permohonan);
    }
    public function getStatusDokumen()
    {
        return $this->db->get('status_dokumen')->result_array();
    }


    public function getLetakTanah()
    {
        $query = $this->db->query("SELECT * FROM `letak_tanah` 
            JOIN `desa` ON `letak_tanah`.`id_desa` = desa.id_desa 
            JOIN kecamatan ON desa.id_kecamatan = kecamatan.id_kecamatan");

        return $query->row_array();
    }


    public function getStatusKtp($id_permohonan)
    {
        $query = $this->db->query("SELECT * FROM `dokumen_ktp` 
            JOIN `status_dokumen`
            ON dokumen_ktp.id_statusktp = status_dokumen.id_statusdokumen
            WHERE dokumen_ktp.id_dokumenktp = $id_permohonan");

        return $query->row_array();
    }

    public function getStatusKk($id_permohonan)
    {
        $query = $this->db->query("SELECT * FROM `dokumen_kk` 
            JOIN `status_dokumen`
            ON dokumen_kk.id_statuskk = status_dokumen.id_statusdokumen
            WHERE dokumen_kk.id_dokumenkk = $id_permohonan");

        return $query->row_array();
    }

    public function getStatusBphtb($id_permohonan)
    {
        $query = $this->db->query("SELECT * FROM `bphtb` 
            JOIN `status_dokumen`
            ON bphtb.id_statusbphtb = status_dokumen.id_statusdokumen
            WHERE bphtb.id_bphtb = $id_permohonan");

        return $query->row_array();
    }

    public function getStatusDokumenBatas($id_permohonan)
    {
        $query = $this->db->query("SELECT * FROM `dokumen_batas` 
            JOIN `status_dokumen`
            ON dokumen_batas.id_statusdokbatas = status_dokumen.id_statusdokumen
            WHERE dokumen_batas.id_dokumenbatas = $id_permohonan");

        return $query->row_array();
    }

    public function getStatusDokTambahan($id_permohonan)
    {
        $query = $this->db->query("SELECT * FROM `dokumen_tambahan` 
            JOIN `status_dokumen`
            ON dokumen_tambahan.id_statusdoktambahan = status_dokumen.id_statusdokumen
            WHERE dokumen_tambahan.id_doktambahan = $id_permohonan");

        return $query->row_array();
    }

    public function getPermohonanTerbaru($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_pemohon', $keyword);
            $this->db->or_like('NIK', $keyword);
            $this->db->or_like('no_berkas', $keyword);
            $this->db->or_like('NIB', $keyword);
            $this->db->or_like('status', $keyword);
        }

        $this->db->select('*');
        $this->db->from('permohonan');
        $this->db->join('pemohon', 'pemohon.id_pemohon = permohonan.id_pemohon');
        $this->db->join('status', 'status.id_status = permohonan.id_status');
        $this->db->join('letak_tanah', 'letak_tanah.id_letaktanah = permohonan.id_letaktanah');
        $this->db->join('desa', 'desa.id_desa = letak_tanah.id_desa', 'left');
        $this->db->order_by('id_permohonan', 'DESC');
        return $this->db->limit($limit, $start)->get()->result_array();
    }

    public function getPermohonanOnProcess($limit, $start, $keyword = null, $id_desa)
    {
        if ($keyword) {
            $this->db->like('nama_pemohon', $keyword);
            $this->db->or_like('NIK', $keyword);
            $this->db->or_like('no_berkas', $keyword);
            $this->db->or_like('NIB', $keyword);
            $this->db->or_like('status', $keyword);
        }

        $this->db->select('*');
        $this->db->from('permohonan');
        $this->db->join('pemohon', 'pemohon.id_pemohon = permohonan.id_pemohon');
        $this->db->join('status', 'status.id_status = permohonan.id_status');
        $this->db->join('letak_tanah', 'letak_tanah.id_letaktanah = permohonan.id_letaktanah');
        $this->db->where('pemohon.id_desa', $id_desa);
        return $this->db->limit($limit, $start)->get()->result_array();
    }


    //getID
    // public function getIdLetakTanah($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_letaktanah FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdKegiatan($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_kegiatan FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdSppt($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_sppt FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdLetterc($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_letterc FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdSuratukur($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_su FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdDi201($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_di201 FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdDi202($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_di202 FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdDi208($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_di208 FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdDi300($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_di300 FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdDi302($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_di302 FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdDi305($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_di305 FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdDi307($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_di307 FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }

    // public function getIdStatus($id_permohonan)
    // {
    //     return $this->db->query("SELECT id_status FROM `select_permohonan`
    //         WHERE select_permohonan.id_permohonan = $id_permohonan");
    // }
}
