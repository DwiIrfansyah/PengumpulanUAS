<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Golongan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Golongan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $getdata = $this->Golongan_model->getdata_Golongan();
        $data['judul'] = 'Daftar Golongan';
        $data['golongan'] = $this->Golongan_model->getdata_Golongan();
        if( $this->input->post('keyword') ){
            $data['golongan'] = $this->Golongan_model->cariDataGolongan();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('golongan/index', $data, $getdata);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $getdata = $this->Golongan_model->getdata_Golongan();
        $data['golongan'] = $getdata;
        $data['judul'] = 'Tambah Data Golongan';
        $this->form_validation->set_rules('id_golongan', 'ID Golongan', 'required|max_length[1]');
        $this->form_validation->set_rules('nama_golongan', 'Nama Golongan', 'required|max_length[50]');
        $this->form_validation->set_rules('gaji_pokok', 'Gaji Pokok', 'required|max_length[12]');
        $this->form_validation->set_rules('tunjangan_istri', 'Tunjangan Istri', 'required|max_length[50]');
        $this->form_validation->set_rules('tunjangan_anak', 'Tunjangan Anak', 'required');
        $this->form_validation->set_rules('tunjangan_transport', 'Tunjangan Transport', 'required');
        $this->form_validation->set_rules('tunjangan_makan', 'Tunjangan Makan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('golongan/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Golongan_model->tambahDataGolongan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('golongan/index');
        }   
    }

    public function hapus($id_golongan)
    {
        $this->Golongan_model->hapusDataGolongan($id_golongan);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('golongan');
    }

    public function ubah($id_golongan)
    {
        $data['judul'] = 'Ubah Data Pegawai';
        $data['golongan'] = $this->Golongan_model->getGolonganById($id_golongan);
        $this->form_validation->set_rules('id_golongan', 'ID Golongan', 'required|max_length[1]');
        $this->form_validation->set_rules('nama_golongan', 'Nama Golongan', 'required|max_length[50]');
        $this->form_validation->set_rules('gaji_pokok', 'Gaji Pokok', 'required|max_length[12]');
        $this->form_validation->set_rules('tunjangan_istri', 'Tunjangan Istri', 'required|max_length[50]');
        $this->form_validation->set_rules('tunjangan_anak', 'Tunjangan Anak', 'required');
        $this->form_validation->set_rules('tunjangan_transport', 'Tunjangan Transport', 'required');
        $this->form_validation->set_rules('tunjangan_makan', 'Tunjangan Makan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('golongan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Golongan_model->UbahDataGolongan();
            $this->session->set_flashdata('flash', 'DiUbah');
            redirect('golongan/index');
        }
    }
}
