<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gaji extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gaji_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $getdata = $this->Gaji_model->getdata_Gaji();
        $data['judul'] = 'Daftar Gaji';
        $data['gaji'] = $this->Gaji_model->getdata_Gaji();
        if( $this->input->post('keyword') ){
            $data['gaji'] = $this->Gaji_model->cariDataGaji();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('gaji/index', $data, $getdata);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $getdata = $this->Gaji_model->getdata_Gaji();
        $data['gaji'] = $getdata;
        $data['judul'] = 'Tambah Data Gaji';
        $this->form_validation->set_rules('id_gaji', 'ID Gaji', 'required|max_length[1]');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required|max_length[12]');
        $this->form_validation->set_rules('id_golongan', 'ID Golongan', 'required|max_length[12]');
        $this->form_validation->set_rules('jumlah_gaji', 'Jumlah Gaji', 'required|max_length[50]');
        $this->form_validation->set_rules('total_gaji', 'Total Gaji', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('gaji/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Gaji_model->tambahDataGaji();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('gaji/index');
        }
    }

    public function hapus($id_gaji)
    {
        $this->Gaji_model->hapusDataGaji($id_gaji);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('gaji');
    }

    public function ubah($id_gaji)
    {
        $data['judul'] = 'Ubah Data gaji';
        $data['gaji'] = $this->Gaji_model->getGajiById($id_gaji);
        $this->form_validation->set_rules('id_gaji', 'ID Gaji', 'required|max_length[1]');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required|max_length[12]');
        $this->form_validation->set_rules('id_golongan', 'ID Golongan', 'required|max_length[12]');
        $this->form_validation->set_rules('jumlah_gaji', 'Jumlah Gaji', 'required|max_length[50]');
        $this->form_validation->set_rules('total_gaji', 'Total Gaji', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('gaji/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Gaji_model->ubahDataGaji();
            $this->session->set_flashdata('flash', 'DiUbah');
            redirect('gaji/index');
        }
    }
    
    
}