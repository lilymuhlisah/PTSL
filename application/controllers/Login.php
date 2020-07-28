<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_Pengguna');
        $this->load->model('M_Desa');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login - Sistem Informasi PTSL';

            $this->load->view('templates/login_header', $data);
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $u_login = $this->db->get_where('u_pengguna', ['username' => $username])->row_array();

        //user data is available
        if ($u_login) {
            //user hasnt been activated
            if ($u_login['is_active'] == 1) {
                //password check
                if (password_verify($password, $u_login['password'])) {
                    $data = [
                        'username' => $u_login['username'],
                        'id_role' => $u_login['id_role'],
                        'id_desa' => $u_login['id_desa']
                    ];

                    $this->session->set_userdata($data);

                    if ($this->session->userdata('id_role') == 1) {
                        redirect('kantah_kab_malang');
                    } elseif ($this->session->userdata('id_role') == 2) {
                        redirect('panitiadesa');
                    } elseif ($this->session->userdata('id_role') == 3) {
                        redirect('admin');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi yang dimasukkan salah.</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data pengguna belum diaktivasi.<br>Silakan melakukan aktivasi terlebih dahulu sebelum login kembali.</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data yang dimasukkan tidak terdaftar.<br>Silakan login kembali.</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_instansi');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" style="color:darkslategrey">Anda telah berhasil keluar.</div>');
        redirect('login');
    }

    public function blocked()
    {
        echo 'access blocked';
    }

    // public function registration()
    // {
    //     $data['judul'] = 'Registrasi - Sistem Informasi PTSL';
    //     $data['u_instansi'] = $this->M_Pengguna->getInstansi();

    //     $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
    //     $this->form_validation->set_rules('instansi', 'Instansi', 'required');
    //     //$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
    //     $this->form_validation->set_rules('username', 'Username', 'required');
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[u_pengguna.email]', [
    //         'is_unique' => 'Email yang dimasukkan telah terdaftar'
    //     ]);
    //     $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
    //         'matches' => 'Kata sandi tidak sesuai',
    //         'min_length' => 'Kata sandi minimal 8 karakter'
    //     ]);
    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/login_header', $data);
    //         $this->load->view('auth/registration');
    //     } else {
    //         $data = [
    //             'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
    //             'id_instansi' => htmlspecialchars($this->input->post('instansi', true)),
    //             'jabatan' => $this->input->post('jabatan', true),
    //             // 'foto_profile' => 'default.jpg',
    //             'username' => $this->input->post('username', true),
    //             'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
    //             'email' => $this->input->post('email', true),
    //             'id_kecamatan' => $this->input->post('id_kecamatan', true),
    //             'id_desa' => $this->input->post('id_desa', true),
    //             'is_active' => 1,
    //             'create_date' => $this->input->post('create_date', true)
    //         ];

    //         $this->M_Pengguna->registerUser($data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Akun Anda telah berhasil terdaftar. Silakan Login untuk mengakses sistem.</div>');
    //         redirect('Login');
    //     }
    // }
}
