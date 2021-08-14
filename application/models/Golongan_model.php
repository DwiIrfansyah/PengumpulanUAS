<?php

class Golongan_model extends CI_Model
{
    public function getAllGolongan()
    {
        return $this->db->get('golongan')->result_array();
    }

    public function getGolonganById($id_golongan)
    {
        return $this->db->get_where('golongan', ['id_golongan' => $id_golongan])->row_array();
    }

    public function getdata_Golongan()
    {
        $query = $this->db->query("SELECT * FROM golongan ORDER BY id_golongan ASC");
        return $query->result_array();
    }

    public function tambahDataGolongan()
    {
        $data = [
            "id_golongan" => $this->input->post('id_golongan', true),
            "nama_golongan" => $this->input->post('nama_golongan', true),
            "gaji_pokok" => $this->input->post('gaji_pokok', true),
            "tunjangan_istri" => $this->input->post('tunjangan_istri', true),
            "tunjangan_anak" => $this->input->post('tunjangan_anak', true),
            "tunjangan_transport" => $this->input->post('tunjangan_transport', true),
            "tunjangan_makan" => $this->input->post('tunjangan_makan', true)
        ];
        $this->db->insert('golongan', $data);
    }

    public function hapusDataGolongan($id_golongan)
    {
        $this->db->where('id_golongan', $id_golongan);
        $this->db->delete('golongan');
    }

    public function ubahDataGolongan()
    {
        $data = [
            "id_golongan" => $this->input->post('id_golongan', true),
            "nama_golongan" => $this->input->post('nama_golongan', true),
            "gaji_pokok" => $this->input->post('gaji_pokok', true),
            "tunjangan_istri" => $this->input->post('tunjangan_istri', true),
            "tunjangan_anak" => $this->input->post('tunjangan_anak', true),
            "tunjangan_transport" => $this->input->post('tunjangan_transport', true),
            "tunjangan_makan" => $this->input->post('tunjangan_makan', true)
        ];
        $this->db->where('id_golongan',  $this->input->post('id_golongan'));
        $this->db->update('golongan', $data);
    }

    public function cariDataGolongan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_golongan', $keyword);
        $this->db->or_like('nama_golongan', $keyword);
        $this->db->or_like('gaji_pokok', $keyword);
        $this->db->or_like('tunjangan_istri', $keyword);
        $this->db->or_like('tunjangan_anak', $keyword);
        $this->db->or_like('tunjangan_transport', $keyword);
        $this->db->or_like('tunjangan_makan', $keyword);
        return $this->db->get('golongan')->result_array();
    }
}
