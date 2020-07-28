<?php

class Kantah_kab_malang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        if ($this->session->userdata('id_role') != 1) {
            redirect('Login');
        }

        $this->load->model('M_DataPemohon');
        $this->load->model('M_DataPermohonan');
        $this->load->model('M_Desa');
        $this->load->model('M_Pengguna');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['judul'] = 'Permohonan Terbaru';
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        //get keyword search
        $data['keyword'] = null;
        if ($this->input->get('submit')) {
            $data['keyword'] = $this->input->get('keyword');
        }

        //pagination
        $this->db->like('nama_pemohon', $data['keyword']);
        $this->db->or_like('NIK', $data['keyword']);
        $this->db->or_like('no_berkas', $data['keyword']);
        $this->db->or_like('NIB', $data['keyword']);
        $this->db->or_like('status', $data['keyword']);
        $this->db->from('permohonan');
        $this->db->join('pemohon', 'pemohon.id_pemohon = permohonan.id_pemohon');
        $this->db->join('status', 'status.id_status = permohonan.id_status');
        $this->db->join('letak_tanah', 'letak_tanah.id_letaktanah = permohonan.id_letaktanah');
        $this->db->join('desa', 'desa.id_desa = letak_tanah.id_desa', 'left');

        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data['permohonan'] = $this->M_DataPermohonan->getPermohonanTerbaru($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('permohonan/permohonan_terbaru', $data);
        $this->load->view('templates/footer', $data);
    }

    public function get_desa()
    {
        $data['judul'] = 'Daftar Desa';
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        //get keyword search
        $data['keyword'] = null;
        if ($this->input->get('submit')) {
            $data['keyword'] = $this->input->get('keyword');
        }

        //pagination
        $this->db->like('nama_desa', $data['keyword']);
        $this->db->or_like('nama_kecamatan', $data['keyword']);
        $this->db->from('desa');
        $this->db->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan');

        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data['desa'] = $this->M_Desa->getListDesa($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pemohon/list_desa', $data);
        $this->load->view('templates/footer');
    }

    public function get_pemohonByDesa($id_desa)
    {
        $data['judul'] = 'Daftar Pemohon Desa';
        $data['desa'] = $this->M_Desa->listDesa($id_desa);
        $data['pemohon'] = $this->M_DataPemohon->getPemohonByDesa($id_desa);
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pemohon/list_pemohon_by_desa', $data);
        $this->load->view('templates/footer');
    }

    public function detail_pemohonForKantah($id_pemohon)
    {
        $data['judul'] = 'Detail Pemohon';
        $data['pemohon'] = $this->M_DataPemohon->detailPemohon($id_pemohon);
        $data['permohonan'] = $this->M_DataPermohonan->getPermohonan($id_pemohon);
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pemohon/detail_pemohon_kantah', $data);
        $this->load->view('templates/footer');
    }

    public function detail_permohonanForKantah($id_pemohon)
    {
        $data['judul'] = 'Rincian Permohonan';
        $data['pemohon'] = $this->M_DataPemohon->detailPemohon($id_pemohon);
        $id_permohonan = $this->uri->segment(4);
        $data['permohonan'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['status'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_ktp'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_kk'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['bphtb'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_batas'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_tambahan'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['kegiatan'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['letak_tanah'] = $this->M_DataPermohonan->getLetakTanah();
        $data['kecamatan'] = $this->M_Desa->getKecamatan();
        $data['status_ktp'] = $this->M_DataPermohonan->getStatusKtp($id_permohonan);
        $data['status_kk'] = $this->M_DataPermohonan->getStatusKk($id_permohonan);
        $data['status_bphtb'] = $this->M_DataPermohonan->getStatusBphtb($id_permohonan);
        $data['status_dokbatas'] = $this->M_DataPermohonan->getStatusDokumenBatas($id_permohonan);
        $data['status_doktambahan'] = $this->M_DataPermohonan->getStatusDokTambahan($id_permohonan);
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('permohonan/detail_permohonan_kantah', $data);
        $this->load->view('templates/footer');
    }

    public function verifikasi_berkas($id_pemohon)
    {
        $data['judul'] = 'Verifikasi Berkas Permohonan';
        $data['pemohon'] = $this->M_DataPemohon->detailPemohon($id_pemohon);
        $id_permohonan = $this->uri->segment(4);
        $data['permohonan'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['status'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_ktp'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_kk'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['bphtb'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_batas'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_tambahan'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['kegiatan'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['letak_tanah'] = $this->M_DataPermohonan->getLetakTanah();
        $data['kecamatan'] = $this->M_Desa->getKecamatan();
        $data['status_dokumen'] = $this->M_DataPermohonan->getStatusDokumen();
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        if (isset($_POST['submit'])) {
            $ktp = [
                'id_statusktp' => $this->input->post('status_dokumenktp', true)
            ];

            $kk = [
                'id_statuskk' => $this->input->post('status_dokumenkk', true)
            ];

            $bphtb = [
                'id_statusbphtb' => $this->input->post('status_dokumenbphtb', true)
            ];

            $dokumen_batas = [
                'id_statusdokbatas' => $this->input->post('status_dokumenbatas', true)
            ];

            $dokumen_tambahan = [
                'id_statusdoktambahan' => $this->input->post('status_dokumentambahan', true)
            ];

            $permohonan = [
                'id_permohonan' => $id_permohonan,
                'keterangan' => $this->input->post('keterangan', true)
            ];

            $this->M_DataPermohonan->verifikasiBerkas($ktp, $kk, $bphtb, $dokumen_batas, $dokumen_tambahan, $permohonan);
            $this->M_DataPermohonan->updateStatus($id_permohonan, $ktp['id_statusktp'], $kk['id_statuskk'], $bphtb['id_statusbphtb'], $dokumen_batas['id_statusdokbatas'], $dokumen_tambahan['id_statusdoktambahan']);
            $this->session->set_flashdata('flash_add', 'diubah');
            redirect('kantah_kab_malang/detail_permohonanForKantah/' . $id_pemohon . '/' . $id_permohonan);
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('permohonan/verifikasi_berkas', $data);
            $this->load->view('templates/footer');
        }
    }

    public function print_BuktiVerifikasi($id_pemohon)
    {
        $this->load->library('dompdf/pdfgenerator');

        $data['judul'] = 'Bukti Verifikasi Berkas';
        $data['pemohon'] = $this->M_DataPemohon->detailPemohon($id_pemohon);
        $id_permohonan = $this->uri->segment(4);
        $data['permohonan'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['status'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_ktp'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_kk'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['bphtb'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_batas'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['dokumen_tambahan'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['kegiatan'] = $this->M_DataPermohonan->detailPermohonan($id_permohonan);
        $data['letak_tanah'] = $this->M_DataPermohonan->getLetakTanah();
        $data['kecamatan'] = $this->M_Desa->getKecamatan();
        $data['status_ktp'] = $this->M_DataPermohonan->getStatusKtp($id_permohonan);
        $data['status_kk'] = $this->M_DataPermohonan->getStatusKk($id_permohonan);
        $data['status_bphtb'] = $this->M_DataPermohonan->getStatusBphtb($id_permohonan);
        $data['status_dokbatas'] = $this->M_DataPermohonan->getStatusDokumenBatas($id_permohonan);
        $data['status_doktambahan'] = $this->M_DataPermohonan->getStatusDokTambahan($id_permohonan);
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $html = $this->load->view('permohonan/bukti_verifikasi', $data, true);

        $this->pdfgenerator->generate($html, 'bukti_verifikasi');
    }
}
