<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['pegawai'] = $this->db->get_where('pegawai', ['username' => $this->session->userdata('username')])->row_array();
        //echo 'Selamat Datang ' . $data['pegawai']['nama_pegawai'];
        $data['judul'] = 'Halaman Utama';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}
