<?php

class Penerbit_model
{
  private $table = 'penerbit';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPenerbit()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultAll();
  }

  public function getPenerbitById($id_penerbit)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_penerbit=:id_penerbit');
    $this->db->bind('id_penerbit', $id_penerbit);
    return $this->db->resultSingle();
  }

  public function getPenerbitNameById($id_penerbit)
  {
    $this->db->query('SELECT nama_penerbit FROM ' . $this->table . ' WHERE id_penerbit=:id_penerbit');
    $this->db->bind('id_penerbit', $id_penerbit);
    return $this->db->resultSingle()['nama_penerbit'];
  }

  public function addPenerbit($nama_penerbit, $negara_asal)
  {
    $query = "INSERT INTO " . $this->table . " VALUES ('', :nama_penerbit, :negara_asal)";

    $this->db->query($query);
    $this->db->bind('nama_penerbit', $nama_penerbit);
    $this->db->bind('negara_asal', $negara_asal);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updatePenerbit($id_penerbit, $nama_penerbit, $negara_asal)
  {
    $query = "UPDATE " . $this->table . " SET nama_penerbit=:nama_penerbit, negara_asal=:negara_asal WHERE id_penerbit=:id_penerbit";

    $this->db->query($query);
    $this->db->bind('id_penerbit', $id_penerbit);
    $this->db->bind('nama_penerbit', $nama_penerbit);
    $this->db->bind('negara_asal', $negara_asal);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusPenerbit($id_penerbit)
  {
    $query = "DELETE FROM " . $this->table . " WHERE id_penerbit=:id_penerbit";

    $this->db->query($query);
    $this->db->bind('id_penerbit', $id_penerbit);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
