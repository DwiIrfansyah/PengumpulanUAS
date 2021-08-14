<?php

class Pegawai_model extends CI_Model
{
    public function getAllPegawai()
    {
        return $this->db->get('pegawai')->result_array();
    }

    public function getPegawaiById($id_pegawai)
    {
        return $this->db->get_where('pegawai', ['id_pegawai' => $id_pegawai])->row_array();
    }

    public function getdata_Pegawai()
    {
        $query = $this->db->query("SELECT * FROM pegawai ORDER BY id_pegawai ASC");
        return $query->result();
    }

    public function tambahDataPegawai()
    {
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        if ($jenis_kelamin == 0) {
            $jenis_kelamin = "L";
        } else {
            $jenis_kelamin = "P";
        }

        $data = [
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "nip" => $this->input->post('nip', true),
            "nik" => $this->input->post('nik', true),
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "telepon" => $this->input->post('telepon', true),
            "agama" => $this->input->post('agama', true),
            "status_nikah" => $this->input->post('status_nikah', true),
            "alamat" => $this->input->post('alamat', true),
            "id_golongan" => $this->input->post('id_golongan', true)
        ];
        $this->db->insert('pegawai', $data);
    }

    public function hapusDataPegawai($id_pegawai)
    {
        $this->db->where('id_pegawai', $id_pegawai);
        $this->db->delete('pegawai');
    }

    public function ubahDataPegawai()
    {
        $data = [
            "id_pegawai" => $this->input->post('id_pegawai', true),
            "nip" => $this->input->post('nip', true),
            "nik" => $this->input->post('nik', true),
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "telepon" => $this->input->post('telepon', true),
            "agama" => $this->input->post('agama', true),
            "status_nikah" => $this->input->post('status_nikah', true),
            "alamat" => $this->input->post('alamat', true),
            "id_golongan" => $this->input->post('id_golongan', true)
        ];
        $this->db->where('id_pegawai',  $this->input->post('id_pegawai'));
        $this->db->update('pegawai', $data);
    }

    public function cariDataPegawai()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_pegawai', $keyword);
        $this->db->or_like('nip', $keyword);
        $this->db->or_like('nik', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        $this->db->or_like('tempat_lahir', $keyword);
        $this->db->or_like('tanggal_lahir', $keyword);
        $this->db->or_like('telepon', $keyword);
        $this->db->or_like('agama', $keyword);
        $this->db->or_like('status_nikah', $keyword);
        $this->db->or_like('status_nikah', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('id_golongan', $keyword);
        return $this->db->get('pegawai')->result_array();
    }
}
