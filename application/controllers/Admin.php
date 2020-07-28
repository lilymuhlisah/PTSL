<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        if ($this->session->userdata('id_role') != 3) {
            redirect('Login');
        }

        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_Pengguna');
        $this->load->model('M_Desa');
        $this->load->model('M_DataPemohon');
        $this->load->model('M_DataPermohonan');
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


    //KELOLA USER
    public function getDesa($id_kecamatan)
    {
        $data = $this->M_Desa->getDesa($id_kecamatan);
        echo json_encode($data);
    }

    public function user_kantah()
    {
        $data['judul'] = 'Daftar Pengguna Kantor Pertanahan Kabupaten Malang';
        $data['u_pengguna'] = $this->M_Pengguna->getUserKantah();
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('auth/admin_page', $data);
        $this->load->view('templates/footer');
    }


    public function detail_userkantah($id_pengguna)
    {
        $data['judul'] = 'Rincian Data Pengguna';
        $data['u_pengguna'] = $this->M_Pengguna->detailUserKantah($id_pengguna);
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('auth/detail_userkantah', $data);
        $this->load->view('templates/footer');
    }


    public function add_userkantah()
    {
        $data['judul'] = 'Tambah Data Pengguna';
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[u_pengguna.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[u_pengguna.email]', [
            'is_unique' => 'Email yang dimasukkan telah terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Kata sandi tidak sesuai',
            'min_length' => 'Kata sandi minimal 8 karakter'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('auth/add_userkantah');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
                'nip' => htmlspecialchars($this->input->post('nip', true)),
                // 'id_role' => htmlspecialchars($this->input->post('instansi', true)),
                'id_role' => 1,
                'jabatan' => $this->input->post('jabatan', true),
                'foto_profil' => 'default.jpg',
                'username' => $this->input->post('username', true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'email' => $this->input->post('email', true),
                'is_active' => 1
            ];

            $this->M_Pengguna->registerUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Akun Anda telah berhasil terdaftar. Silakan Login untuk mengakses sistem.</div>');
            redirect('admin/user_kantah');
        }
    }


    public function delete_user($id_pengguna)
    {
        $this->M_Pengguna->deleteUser($id_pengguna);
        $this->session->set_flashdata('flash_delete', 'dihapus');
        redirect('admin/user_kantah');
    }


    public function edit_userkantah($id_pengguna)
    {
        $data['judul'] = 'Edit Data Pengguna';
        $data['u_pengguna'] = $this->M_Pengguna->detailUserKantah($id_pengguna);
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Kata sandi tidak sesuai',
            'min_length' => 'Kata sandi minimal 8 karakter'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('auth/edit_userkantah');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
                'nip' => htmlspecialchars($this->input->post('nip', true)),
                'id_role' => 1,
                'jabatan' => $this->input->post('jabatan', true),
                'username' => $this->input->post('username', true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'email' => $this->input->post('email', true),
                'is_active' => 1
            ];

            $this->M_Pengguna->editUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Akun Anda telah berhasil terdaftar. Silakan Login untuk mengakses sistem.</div>');
            redirect('admin/detail_userkantah/' . $id_pengguna);
        }
    }

    //USER DESA
    public function user_desa()
    {
        $data['judul'] = 'Daftar Pengguna Panitia Desa';
        $data['u_pengguna'] = $this->M_Pengguna->getUserDesa();
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('auth/admin_pagedesa', $data);
        $this->load->view('templates/footer');
    }


    public function detail_userdesa($id_pengguna)
    {
        $data['judul'] = 'Rincian Data Pengguna';
        $data['u_pengguna'] = $this->M_Pengguna->detailUserDesa($id_pengguna);
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('auth/detail_userdesa', $data);
        $this->load->view('templates/footer');
    }


    public function add_userdesa()
    {
        $data['judul'] = 'Tambah Data Pengguna';
        $data['kecamatan'] = $this->M_Desa->getKecamatan();
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('desa', 'Desa', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[u_pengguna.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[u_pengguna.email]', [
            'is_unique' => 'Email yang dimasukkan telah terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Kata sandi tidak sesuai',
            'min_length' => 'Kata sandi minimal 8 karakter'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('auth/add_userdesa');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
                'id_role' => 2,
                'jabatan' => $this->input->post('jabatan', true),
                'foto_profil' => 'default.jpg',
                'username' => $this->input->post('username', true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'email' => $this->input->post('email', true),
                'id_desa' => $this->input->post('desa', true),
                'is_active' => 1
            ];

            $this->M_Pengguna->registerUser($data);
            // $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Akun Anda telah berhasil terdaftar. Silakan Login untuk mengakses sistem.</div>');
            redirect('admin/user_desa');
        }
    }

    public function edit_userdesa($id_pengguna)
    {
        $data['judul'] = 'Edit Data Pengguna';
        $data['u_pengguna'] = $this->M_Pengguna->detailUserDesa($id_pengguna);
        $data['kecamatan'] = $this->M_Desa->getKecamatan();
        $data['u_login'] = $this->M_Pengguna->getUserLogin();

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('desa', 'Desa', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Kata sandi tidak sesuai',
            'min_length' => 'Kata sandi minimal 8 karakter'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('auth/edit_userdesa');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
                'id_role' => 2,
                'jabatan' => $this->input->post('jabatan', true),
                'username' => $this->input->post('username', true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'email' => $this->input->post('email', true),
                'id_desa' => $this->input->post('desa', true),
                'is_active' => 1
            ];

            $this->M_Pengguna->editUser($data);
            redirect('admin/detail_userdesa/' . $id_pengguna);
        }
    }



    //PERMOHONAN
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
            redirect('admin/detail_permohonanForKantah/' . $id_pemohon . '/' . $id_permohonan);
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

    // public function permohonan_terbaru()
    // {
    //     $data['judul'] = 'Permohonan Terbaru';
    //     $data['u_login'] = $this->M_Pengguna->getUserLogin();

    //     //get keyword search
    //     if ($this->input->post('submit')) {
    //         $data['keyword'] = $this->input->post('keyword');
    //         $this->session->set_userdata('keyword', $data['keyword']);
    //     } else {
    //         $data['keyword'] = $this->session->userdata('keyword');
    //     }

    //     //pagination
    //     $this->db->like('nama_desa', $data['keyword']);
    //     $this->db->or_like('nama_kecamatan', $data['keyword']);
    //     $this->db->from('desa');
    //     $this->db->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan');

    //     $config['total_rows'] = $this->db->count_all_results();
    //     $config['per_page'] = 10;

    //     $this->pagination->initialize($config);
    //     $data['start'] = $this->uri->segment(3);

    //     $data['permohonan'] = $this->M_DataPermohonan->getPermohonanTerbaru($config['per_page'], $data['start'], $data['keyword']);

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('permohonan/permohonan_terbaru', $data);
    //     $this->load->view('templates/footer', $data);
    // }
}
