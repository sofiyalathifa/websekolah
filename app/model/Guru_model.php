<?php
class Guru_model 
{
    private $table = 'guru'; 
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllGuru()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function getGuruById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahDataGuru($data)
    {
        $query = "INSERT INTO guru VALUES(NULL, :nama, :mapel, :kode_mapel) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('kode_mapel', $data['kode_mapel']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataGuru($id)
    {
        $query = "DELETE FROM guru WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataGuru($data)
    {
        $query = "UPDATE guru SET
        nama = :nama,
        mapel = :mapel,
        kode_mapel = :kode_mapel
        WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('mapel', $data['mapel']);
    $this->db->bind('kode_mapel', $data['kode_mapel']);
    $this->db->bind('id', $data['id']);
    $this->db->execute();
    return $this->db->rowCount();
    }

    public function cariDataGuru()
    {
        $keyword = $_POST['keyword'];
        $query   = "SELECT * FROM guru WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultAll();
    }

}