<?php

class Gaji_model extends CI_Model
{
    public function getAllGaji()
    {
        return $this->db->get('gaji')->result_array();
    }

    public function getGajiById($id_gaji)
    {
        return $this->db->get_where('gaji', ['id_gaji' => $id_gaji])->row_array();
    }

    public function getdata_Gaji()
    {
        $query = $this->db->query("SELECT * FROM gaji ORDER BY id_gaji ASC");
        return $query->result_array();
    }

    public function tambahDataGaji()
    {
        $data = [
            "id_gaji" => $this->input->post('id_gaji', true),
            "tanggal" => $this->input->post('tanggal', true),
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "id_golongan" => $this->input->post('id_golongan', true),
            "jumlah_gaji" => $this->input->post('jumlah_gaji', true),
            "total_gaji" => $this->input->post('total_gaji', true)
        ];
        $this->db->insert('gaji', $data);
    }

    public function hapusDataGaji($id_gaji)
    {
        $this->db->where('id_gaji', $id_gaji);
        $this->db->delete('gaji');
    }

    public function ubahDataGaji()
    {
        $data = [
            "id_gaji" => $this->input->post('id_gaji', true),
            "tanggal" => $this->input->post('tanggal', true),
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "id_golongan" => $this->input->post('id_golongan', true),
            "jumlah_gaji" => $this->input->post('jumlah_gaji', true),
            "total_gaji" => $this->input->post('total_gaji', true)
        ];
        $this->db->where('id_gaji',  $this->input->post('id_gaji'));
        $this->db->update('gaji', $data);
    }

    public function cariDataGaji()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_gaji', $keyword);
        $this->db->or_like('tanggal', $keyword);
        $this->db->or_like('id_pegawai', $keyword);
        $this->db->or_like('id_golongan', $keyword);
        $this->db->or_like('jumlah_gaji', $keyword);
        $this->db->or_like('total_gaji', $keyword);
        return $this->db->get('gaji')->result_array();
    }
}