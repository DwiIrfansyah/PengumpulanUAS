<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $getdata = $this->Pegawai_model->getdata_Pegawai();
        $data['judul'] = 'Pengelolaan Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getAllPegawai();
        if( $this->input->post('keyword') ){
            $data['pegawai'] = $this->Pegawai_model->cariDataPegawai();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index', $data, $getdata);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $getdata = $this->Pegawai_model->getdata_Pegawai();
        $data['pegawai'] = $getdata;
        $data['judul'] = 'Tambah Data Pegawai';
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required|max_length[1]');
        $this->form_validation->set_rules('nip', 'NIP', 'required|max_length[12]');
        $this->form_validation->set_rules('nik', 'NIK', 'required|max_length[12]');
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required|max_length[50]');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('telepon', 'Nomor Telepon', 'required|max_length[13]|min_length[11]');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('status_nikah', 'Status', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('id_golongan', 'ID Golongan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pegawai_model->tambahDataPegawai();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pegawai/index');
        }
    }

    public function hapus($id_pegawai)
    {
        $this->Pegawai_model->hapusDataPegawai($id_pegawai);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pegawai');
    }

    public function ubah($id_pegawai)
    {
        $data['judul'] = 'Ubah Data Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getPegawaiById($id_pegawai);
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required|max_length[1]');
        $this->form_validation->set_rules('nip', 'NIP', 'required|max_length[12]');
        $this->form_validation->set_rules('nik', 'NIK', 'required|max_length[12]');
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required|max_length[50]');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('telepon', 'Nomor Telepon', 'required|max_length[13]|min_length[11]');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('id_golongan', 'ID Golongan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pegawai_model->ubahDataPegawai();
            $this->session->set_flashdata('flash', 'DiUbah');
            redirect('pegawai/index');
        }
    }
}
