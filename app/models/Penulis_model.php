<?php

class Penulis_model
{
  private $table = 'penulis';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPenulis()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultAll();
  }

  public function getPenulisById($id_penulis)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_penulis=:id_penulis');
    $this->db->bind('id_penulis', $id_penulis);
    return $this->db->resultSingle();
  }

  public function getPenulisNameById($id_penulis)
  {
    $this->db->query('SELECT nama_penulis FROM ' . $this->table . ' WHERE id_penulis=:id_penulis');
    $this->db->bind('id_penulis', $id_penulis);
    return $this->db->resultSingle()['nama_penulis'];
  }

  public function addPenulis($nama_penulis, $kewarganegaraan)
  {
    $query = "INSERT INTO " . $this->table . " VALUES ('', :nama_penulis, :kewarganegaraan)";

    $this->db->query($query);
    $this->db->bind('nama_penulis', $nama_penulis);
    $this->db->bind('kewarganegaraan', $kewarganegaraan);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updatePenulis($id_penulis, $nama_penulis, $kewarganegaraan)
  {
    $query = "UPDATE " . $this->table . " SET nama_penulis=:nama_penulis, kewarganegaraan=:kewarganegaraan WHERE id_penulis=:id_penulis";

    $this->db->query($query);
    $this->db->bind('id_penulis', $id_penulis);
    $this->db->bind('nama_penulis', $nama_penulis);
    $this->db->bind('kewarganegaraan', $kewarganegaraan);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusPenulis($id_penulis)
  {
    $query = "DELETE FROM " . $this->table . " WHERE id_penulis=:id_penulis";

    $this->db->query($query);
    $this->db->bind('id_penulis', $id_penulis);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
