<?php

class Panitiadesa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        if ($this->session->userdata('id_role') != 2) {
            redirect('Login');
        }

        $this->load->model('M_DataPemohon');
        $this->load->model('M_DataPermohonan');
        $this->load->model('M_Pengguna');
        $this->load->model('M_Desa');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pemohon';
        $id_desa = $this->session->userdata('id_desa');
        $data['pemohon'] = $this->M_DataPemohon->getPemohon($id_desa);
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pemohon/list_pemohon', $data);
        $this->load->view('templates/footer', $data);
    }

    public function getDesa($id_kecamatan)
    {
        $data = $this->M_Desa->getDesa($id_kecamatan);
        echo json_encode($data);
    }

    public function add_pemohon()
    {
        $data['judul'] = 'Tambah Data Pemohon';
        $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Kristen Protestan', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya'];
        $data['kecamatan'] = $this->M_Desa->getKecamatan();
        $data['u_login'] = $this->M_Pengguna->getUserLoginDesa();

        $pemohon = [
            "nama_pemohon" => $this->input->post('nama_lengkap', true),
            "nik" => $this->input->post('nik', true),
            "nama_dusun" => $this->input->post('nama_dusun', true),
            "id_desa" => $this->input->post('desa', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "agama" => $this->input->post('agama', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('desa', 'Nama Desa', 'required');
        $this->form_validation->set_rules('nama_dusun', 'Nama Dusun', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pemohon/add_pemohon');
            $this->load->view('templates/footer');
        } else {
            $this->M_DataPemohon->addPemohon($pemohon);
            $this->session->set_flashdata('flash_add', 'ditambahkan');
            redirect('Panitiadesa');
        }
    }

    public function delete_pemohon($id_pemohon)
    {
        $this->M_DataPemohon->deletePemohon($id_pemohon);
        $this->session->set_flashdata('flash_delete', 'dihapus');
        redirect('Panitiadesa');
    }

    public function detail_pemohon($id_pemohon)
    {
        $data['judul'] = 'Rincian Data Pemohon';
        $data['pemohon'] = $this->M_DataPemohon->detailPemohon($id_pemohon);
        $data['permohonan'] = $this->M_DataPermohonan->getPermohonan($id_pemohon);
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pemohon/detail_pemohon', $data);
        $this->load->view('templates/footer');
    }

    public function edit_pemohon($id_pemohon)
    {
        $data['judul'] = 'Edit Data Pemohon';
        $data['pemohon'] = $this->M_DataPemohon->detailPemohon($id_pemohon);
        $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Kristen Protestan', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya'];
        $data['kecamatan'] = $this->M_Desa->getKecamatan();
        $data['u_login'] = $this->M_Pengguna->getUserLogin();


        $pemohon = [
            "nama_pemohon" => $this->input->post('nama_lengkap', true),
            "nik" => $this->input->post('nik', true),
            "nama_dusun" => $this->input->post('nama_dusun', true),
            "id_desa" => $this->input->post('desa', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "agama" => $this->input->post('agama', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('desa', 'Nama Desa', 'required');
        $this->form_validation->set_rules('nama_dusun', 'Nama Dusun', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pemohon/edit_pemohon', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_DataPemohon->editPemohon($pemohon);
            $this->session->set_flashdata('flash_add', 'diubah');
            redirect('Panitiadesa');
        }
    }

    // public function get_permohonan($id_pemohon)
    // {
    //     $data['permohonan'] = $this->M_DataPermohonan->getPermohonan($id_pemohon);
    //     $this->load->view('pemohon/detail_pemohon', $data);
    // }

    public function add_permohonan($id_pemohon)
    {
        $data['judul'] = 'Form Tambah Permohonan';
        $data['kegiatan'] = $this->M_DataPermohonan->getKegiatan();
        $data['kecamatan'] = $this->M_Desa->getKecamatan();
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $spptpajak = [
            "no_sppt" => $this->input->post('no_sppt', true),
            "nama_wajib_pajak" => $this->input->post('nama_wajib_pajak', true),
            "luas_tanah" => $this->input->post('luas_tanah', true),
            "njop" => $this->input->post('njop', true)
        ];

        $letak_tanah = [
            "id_desa" => $this->input->post('desa', true),
            "dusun" => $this->input->post('dusun', true),
            "rt" => $this->input->post('rt', true),
            "rw" => $this->input->post('rw', true)
        ];

        $letterc = [
            "nama_letterc" => $this->input->post('nama_letterc', true),
            "no_letterc" => $this->input->post('no_letterc', true),
            "persil" => $this->input->post('persil', true),
            "kelas" => $this->input->post('kelas', true),
            "luas_letterc" => $this->input->post('luas_letterc', true),
            "dokumen_letterc" => $this->input->post('dokumen_letterc', true)
        ];

        $di300 = [
            "tanggal_di300" => $this->input->post('tanggal_di300', true),
            "nomor_di300" => $this->input->post('nomor_di300', true),
            "dokumen_di300" => $this->input->post('dokumen_di300', true),
        ];

        $di302 = [
            "tanggal_di302" => $this->input->post('tanggal_di302', true),
            "nomor_di302" => $this->input->post('nomor_di302', true),
            "dokumen_di302" => $this->input->post('dokumen_di302', true),
        ];

        $di305 = [
            "nomor_di305" => $this->input->post('nomor_di305', true),
            "dokumen_di305" => $this->input->post('dokumen_di305', true),
        ];

        $di201 = [
            "tanggal_di201" => $this->input->post('tanggal_di201', true),
            "nomor_di201" => $this->input->post('nomor_di201', true),
            "dokumen_di201" => $this->input->post('dokumen_di201', true),
        ];

        $di202 = [
            "tanggal_di202" => $this->input->post('tanggal_di202', true),
            "nomor_di202" => $this->input->post('nomor_di202', true),
            "dokumen_di202" => $this->input->post('dokumen_di202', true),
        ];

        $suratukur = [
            "tanggal_su" => $this->input->post('tanggal_su', true),
            "nomor_su" => $this->input->post('nomor_su', true),
            "dokumen_su" => $this->input->post('dokumen_su', true),
            "id_statusdokumen" => $this->input->post('id_statusdokumen', true)
        ];

        $di307 = [
            "tanggal_di307" => $this->input->post('tanggal_di307', true),
            "nomor_di307" => $this->input->post('nomor_di307', true),
            "dokumen_di307" => $this->input->post('dokumen_di307', true),
        ];

        $di208 = [
            "tanggal_di208" => $this->input->post('tanggal_di208', true),
            "nomor_di208" => $this->input->post('nomor_di208', true),
            "dokumen_di208" => $this->input->post('dokumen_di208', true),
        ];

        $ktp = [
            "nama_dokumenktp" => null,
            "id_statusktp" => 1
        ];

        $kk = [
            "nama_dokumenkk" => null,
            "id_statuskk" => 1
        ];

        $bphtb = [
            "nama_bphtb" => null,
            "id_statusbphtb" => 1
        ];

        $dokbatas = [
            "nama_dokumenbatas" => null,
            "id_statusdokbatas" => 1
        ];

        $doktambahan = [
            "nama_doktambahan" => null,
            "id_statusdoktambahan" => 1
        ];

        $permohonan = [
            "nib" => $this->input->post('nib', true),
            "no_berkas" => $this->input->post('no_berkas', true),
            "kluster" => $this->input->post('kluster', true),
            "pbt" => $this->input->post('pbt', true),
            "penggunaan_tanah" => $this->input->post('penggunaan_tanah', true),
            "no_hak_milik" => $this->input->post('no_hak_milik', true),
            "no_seri_blanko" => $this->input->post('no_seri_blanko', true),
            "id_pemohon" => $id_pemohon,
            "id_letaktanah" => $this->input->post('id_letaktanah', true),
            "id_kegiatan" => $this->input->post('kegiatan', true),
            "id_sppt" => $this->input->post('id_sppt', true),
            "id_letterc" => $this->input->post('id_letterc', true),
            "id_su" => $this->input->post('id_su', true),
            "id_di201" => $this->input->post('id_di201', true),
            "id_di202" => $this->input->post('id_di202', true),
            "id_di208" => $this->input->post('id_di208', true),
            "id_di300" => $this->input->post('id_di300', true),
            "id_di302" => $this->input->post('id_di302', true),
            "id_di305" => $this->input->post('id_di305', true),
            "id_di307" => $this->input->post('id_di307', true),
            "id_status" => 1,
            "id_dokumenktp" => null,
            "id_dokumenkk" => null,
            "id_bphtb" => null,
            "id_dokumenbatas" => null,
            "id_doktambahan" => null,
            "keterangan" => $this->input->post('keterangan', true),
            "tanggal" => $this->input->post('tanggal', true)
        ];

        //upload berkas
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5120;
        $this->load->library('upload', $config);

        //berkas KTP
        $config['upload_path'] = './berkas/KTP/';
        $config['file_name'] = 'KTP_' . $permohonan['no_berkas'];
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('id_dokumenktp')) {
            $ktp['nama_dokumenktp'] = $this->upload->file_name;
        } else {
            $ktp['nama_dokumenktp'] = null;
        }



        //berkas Kartu Keluarga
        $config['upload_path'] = './berkas/Kartu_Keluarga_KK/';
        $config['file_name'] = 'Kartu_Keluarga(KK)_' . $permohonan['no_berkas'];
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('id_dokumenkk')) {
            $kk['nama_dokumenkk'] = $this->upload->file_name;
        } else {
            $kk['nama_dokumenkk'] = null;
        }



        //berkas BPHTB
        $config['upload_path'] = './berkas/BPHTB/';
        $config['file_name'] = 'BPHTB_' . $permohonan['no_berkas'];
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('id_bphtb')) {
            $bphtb['nama_bphtb'] = $this->upload->file_name;
        } else {
            $bphtb['nama_bphtb'] = null;
        }



        //berkas bukti batas tanah
        $config['upload_path'] = './berkas/Bukti batas tanah/';
        $config['file_name'] = 'Bukti_Batas_Tanah-' . $permohonan['no_berkas'];
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('id_dokumenbatas')) {
            $dokbatas['nama_dokumenbatas'] = $this->upload->file_name;
        } else {
            $dokbatas['nama_dokumenbatas'] = null;
        }



        //berkas tambahan
        $config['upload_path'] = './berkas/Berkas tambahan/';
        $config['file_name'] = 'Berkas_tambahan-' . $permohonan['no_berkas'];
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('id_doktambahan')) {
            $doktambahan['nama_doktambahan'] = $this->upload->file_name;
        } else {
            $doktambahan['nama_doktambahan'] = null;
        }




        $this->form_validation->set_rules('nib', 'NIB', 'required|numeric|min_length[5]|max_length[5]');
        $this->form_validation->set_rules('no_berkas', 'Nomor Berkas', 'required|numeric|min_length[5]|max_length[5]|is_unique[permohonan.no_berkas]', [
            'is_unique' => 'Nomor berkas yang dimasukkan telah terdaftar.'
        ]);
        $this->form_validation->set_rules('kluster', 'Kluster', 'required');
        $this->form_validation->set_rules('pbt', 'PBT', 'required');
        $this->form_validation->set_rules('penggunaan_tanah', 'Penggunaan Tanah', 'required');
        $this->form_validation->set_rules('no_hak_milik', 'Nomor Hak Milik', 'required');
        $this->form_validation->set_rules('no_seri_blanko', 'Nomor Seri Blanko', 'required');
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('no_sppt', 'Nomor SPPT', 'required');
        $this->form_validation->set_rules('nama_wajib_pajak', 'Nama Wajib Pajak', 'required');
        $this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'required');
        $this->form_validation->set_rules('njop', 'NJOP', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('desa', 'Desa', 'required');
        $this->form_validation->set_rules('dusun', 'Dusun', 'required');
        $this->form_validation->set_rules('rt', 'RT', 'required');
        $this->form_validation->set_rules('rw', 'RW', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('permohonan/add_permohonan', $data);
            $this->load->view('templates/footer');
        } else {

            if (!$ktp['nama_dokumenktp'] && $kk['nama_dokumenkk'] && $bphtb['nama_bphtb'] && $dokbatas['nama_dokumenbatas'] && $doktambahan['nama_doktambahan']) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $this->M_DataPermohonan->addPermohonan($permohonan, $spptpajak, $letak_tanah, $letterc, $suratukur, $di201, $di202, $di208, $di300, $di302, $di305, $di307, $ktp, $kk, $bphtb, $dokbatas, $doktambahan);
            }
            $this->session->set_flashdata('flash_add', 'ditambahkan');
            redirect('Panitiadesa/detail_pemohon/' . $id_pemohon);
        }
    }

    public function detail_permohonan($id_pemohon)
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
        $this->load->view('permohonan/detail_permohonan', $data);
        $this->load->view('templates/footer');
    }


    public function edit_permohonan($id_pemohon)
    {
        $data['judul'] = 'Form Edit Permohonan';
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
        $data['u_login'] = $this->M_Pengguna->getUserLogin();


        if (isset($_POST['submit'])) {
            $spptpajak = [
                // "id_sppt" => $this->M_DataPermohonan->getIdSppt($id_permohonan),
                "no_sppt" => $this->input->post('no_sppt', true),
                "nama_wajib_pajak" => $this->input->post('nama_wajib_pajak', true),
                "luas_tanah" => $this->input->post('luas_tanah', true),
                "njop" => $this->input->post('njop', true),
                "dokumen_sppt" => $this->input->post('dokumen_sppt', true),
                "id_statusdokumen" => $this->input->post('id_statusdokumen', true)
            ];

            $letak_tanah = [
                // "id_letaktanah" => $this->M_DataPermohonan->getIdLetakTanah($id_permohonan),
                "id_desa" => $this->input->post('desa', true),
                "dusun" => $this->input->post('dusun', true),
                "rt" => $this->input->post('rt', true),
                "rw" => $this->input->post('rw', true)
            ];

            $letterc = [
                // "id_letterc" => $this->M_DataPermohonan->getIdLetterc($id_permohonan),
                "nama_letterc" => $this->input->post('nama_letterc', true),
                "no_letterc" => $this->input->post('no_letterc', true),
                "persil" => $this->input->post('persil', true),
                "kelas" => $this->input->post('kelas', true),
                "luas_letterc" => $this->input->post('luas_letterc', true),
                "dokumen_letterc" => $this->input->post('dokumen_letterc', true)
            ];

            $di300 = [
                // "id_di300" => $this->M_DataPermohonan->getIdDi300($id_permohonan),
                "tanggal_di300" => $this->input->post('tanggal_di300', true),
                "nomor_di300" => $this->input->post('nomor_di300', true),
                "dokumen_di300" => $this->input->post('dokumen_di300', true),
            ];

            $di302 = [
                // "id_di302" => $this->M_DataPermohonan->getIdDi302($id_permohonan),
                "tanggal_di302" => $this->input->post('tanggal_di302', true),
                "nomor_di302" => $this->input->post('nomor_di302', true),
                "dokumen_di302" => $this->input->post('dokumen_di302', true),
            ];

            $di305 = [
                // "id_di305" => $this->M_DataPermohonan->getIdDi305($id_permohonan),
                "nomor_di305" => $this->input->post('nomor_di305', true),
                "dokumen_di305" => $this->input->post('dokumen_di305', true),
            ];

            $di201 = [
                // "id_di201" => $this->M_DataPermohonan->getIdDi201($id_permohonan),
                "tanggal_di201" => $this->input->post('tanggal_di201', true),
                "nomor_di201" => $this->input->post('nomor_di201', true),
                "dokumen_di201" => $this->input->post('dokumen_di201', true),
            ];

            $di202 = [
                // "id_di202" => $this->M_DataPermohonan->getIdDi202($id_permohonan),
                "tanggal_di202" => $this->input->post('tanggal_di202', true),
                "nomor_di202" => $this->input->post('nomor_di202', true),
                "dokumen_di202" => $this->input->post('dokumen_di202', true),
            ];

            $suratukur = [
                // "id_su" => $this->M_DataPermohonan->getIdSuratukur($id_permohonan),
                "tanggal_su" => $this->input->post('tanggal_su', true),
                "nomor_su" => $this->input->post('nomor_su', true),
                "dokumen_su" => $this->input->post('dokumen_su', true),
                "id_statusdokumen" => $this->input->post('id_statusdokumen', true)
            ];

            $di307 = [
                // "id_di307" => $this->M_DataPermohonan->getIdDi307($id_permohonan),
                "tanggal_di307" => $this->input->post('tanggal_di307', true),
                "nomor_di307" => $this->input->post('nomor_di307', true),
                "dokumen_di307" => $this->input->post('dokumen_di307', true),
            ];

            $di208 = [
                // "id_di208" => $this->M_DataPermohonan->getIdDi208($id_permohonan),
                "tanggal_di208" => $this->input->post('tanggal_di208', true),
                "nomor_di208" => $this->input->post('nomor_di208', true),
                "dokumen_di208" => $this->input->post('dokumen_di208', true),
            ];

            $ktp = [];

            $kk = [];

            $bphtb = [];

            $dokbatas = [];

            $doktambahan = [];

            $permohonan = [
                "nib" => $this->input->post('nib', true),
                "no_berkas" => $this->input->post('no_berkas', true),
                "kluster" => $this->input->post('kluster', true),
                "pbt" => $this->input->post('pbt', true),
                "penggunaan_tanah" => $this->input->post('penggunaan_tanah', true),
                "no_hak_milik" => $this->input->post('no_hak_milik', true),
                "no_seri_blanko" => $this->input->post('no_seri_blanko', true),
                "id_pemohon" => $id_pemohon,
                "id_kegiatan" => $this->input->post('kegiatan', true)
            ];

            //upload berkas
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 5120;
            $this->load->library('upload', $config);

            //berkas KTP
            $config['upload_path'] = './berkas/KTP/';
            $config['file_name'] = 'KTP_' . $permohonan['no_berkas'];
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('id_dokumenktp')) {
                $ktp['nama_dokumenktp'] = $this->upload->file_name;
            } else {
                $ktp['nama_dokumenktp'] = $data['dokumen_ktp']['nama_dokumenktp'];
            }


            //berkas Kartu Keluarga
            $config['upload_path'] = './berkas/Kartu_Keluarga_KK/';
            $config['file_name'] = 'Kartu_Keluarga(KK)_' . $permohonan['no_berkas'];
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('id_dokumenkk')) {
                $kk['nama_dokumenkk'] = $this->upload->file_name;
            } else {
                $kk['nama_dokumenkk'] = $data['dokumen_kk']['nama_dokumenkk'];
            }


            //berkas BPHTB
            $config['upload_path'] = './berkas/BPHTB/';
            $config['file_name'] = 'BPHTB_' . $permohonan['no_berkas'];
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('id_bphtb')) {
                $bphtb['nama_bphtb'] = $this->upload->file_name;
            } else {
                $bphtb['nama_bphtb'] = $data['bphtb']['nama_bphtb'];
            }


            //berkas bukti batas tanah
            $config['upload_path'] = './berkas/Bukti batas tanah/';
            $config['file_name'] = 'Bukti_Batas_Tanah-' . $permohonan['no_berkas'];
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('id_dokumenbatas')) {
                $dokbatas['nama_dokumenbatas'] = $this->upload->file_name;
            } else {
                $dokbatas['nama_dokumenbatas'] = $data['dokumen_batas']['nama_dokumenbatas'];
            }

            //berkas tambahan
            $config['upload_path'] = './berkas/Berkas tambahan/';
            $config['file_name'] = 'Berkas_tambahan-' . $permohonan['no_berkas'];
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('id_doktambahan')) {
                $doktambahan['nama_doktambahan'] = $this->upload->file_name;
            } else {
                $doktambahan['nama_doktambahan'] = $data['dokumen_tambahan']['nama_doktambahan'];
            }


            $this->form_validation->set_rules('nib', 'NIB', 'required|numeric|min_length[5]|max_length[5]');
            $this->form_validation->set_rules('no_berkas', 'Nomor Berkas', 'required|numeric|min_length[5]|max_length[5]', [
                'is_unique' => 'Nomor berkas yang dimasukkan telah terdaftar.'
            ]);
            $this->form_validation->set_rules('kluster', 'Kluster', 'required');
            $this->form_validation->set_rules('pbt', 'PBT', 'required');
            $this->form_validation->set_rules('penggunaan_tanah', 'Penggunaan Tanah', 'required');
            $this->form_validation->set_rules('no_hak_milik', 'Nomor Hak Milik', 'required');
            $this->form_validation->set_rules('no_seri_blanko', 'Nomor Seri Blanko', 'required');
            $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
            $this->form_validation->set_rules('no_sppt', 'Nomor SPPT', 'required');
            $this->form_validation->set_rules('nama_wajib_pajak', 'Nama Wajib Pajak', 'required');
            $this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'required');
            $this->form_validation->set_rules('njop', 'NJOP', 'required');
            $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
            $this->form_validation->set_rules('desa', 'Desa', 'required');
            $this->form_validation->set_rules('dusun', 'Dusun', 'required');
            $this->form_validation->set_rules('rt', 'RT', 'required');
            $this->form_validation->set_rules('rw', 'RW', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('permohonan/edit_permohonan', $data);
                $this->load->view('templates/footer');
            } else {
                // if (!$ktp['nama_dokumenktp'] && $kk['nama_dokumenkk'] && $bphtb['nama_bphtb'] && $dokbatas['nama_dokumenbatas'] && $doktambahan['nama_doktambahan']) {
                //     $error = array('error' => $this->upload->display_errors());
                //     print_r($error);
                // } else {
                $this->M_DataPermohonan->editPermohonan($permohonan, $spptpajak, $letak_tanah, $letterc, $suratukur, $di201, $di202, $di208, $di300, $di302, $di305, $di307, $ktp, $kk, $bphtb, $dokbatas, $doktambahan, $id_permohonan);
                // }
                $this->session->set_flashdata('flash_add', 'diubah');
                redirect('Panitiadesa/detail_permohonan/' . $id_pemohon . '/' . $id_permohonan);
            }
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('permohonan/edit_permohonan', $data);
        $this->load->view('templates/footer');
    }

    public function berkas_onprocess()
    {
        $data['judul'] = 'Daftar Permohonan';
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $id_desa = $this->session->userdata('id_desa');

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
        $this->db->where('pemohon.id_desa', $id_desa);

        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data['permohonan'] = $this->M_DataPermohonan->getPermohonanOnProcess($config['per_page'], $data['start'], $data['keyword'], $id_desa);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('permohonan/permohonan_onprocess', $data);
        $this->load->view('templates/footer', $data);
    }
}
