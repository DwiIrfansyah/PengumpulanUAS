<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['judul'] = 'Login Restohelper';
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/auth_head', $data);
            $this->load->view('auth/login_form');
            $this->load->view('templates/auth_foot');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $pegawai = $this->db->get_where('pegawai', ['username' => $username])->row_array();

        if ($pegawai) {
            if (md5($password) == $pegawai['password']) {
                $data = [
                    'username' => $pegawai['username'],
                    'nama_pegawai' => $pegawai['nama_pegawai'],
                    'role_id' => $pegawai['role_id']
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Akun Tidak Terdaftar!</div>');
            redirect('auth');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('nama_pegawai');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Berhasil Logout</div>');
        redirect('auth');
    }
}
