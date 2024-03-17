<?php

class Kategori_model
{
  private $table = 'kategori';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllKategori()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultAll();
  }

  public function getKategoriById($id_kategori)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kategori=:id_kategori');
    $this->db->bind('id_kategori', $id_kategori);
    return $this->db->resultSingle();
  }

  public function getKategoriNameById($id_kategori)
  {
    $this->db->query('SELECT nama_kategori FROM ' . $this->table . ' WHERE id_kategori=:id_kategori');
    $this->db->bind('id_kategori', $id_kategori);
    return $this->db->resultSingle()['nama_kategori'];
  }

  public function addKategori($nama_kategori, $deskripsi)
  {
    $query = "INSERT INTO " . $this->table . " VALUES ('', :nama_kategori, :deskripsi)";

    $this->db->query($query);
    $this->db->bind('nama_kategori', $nama_kategori);
    $this->db->bind('deskripsi', $deskripsi);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateKategori($id_kategori, $nama_kategori, $deskripsi)
  {
    $query = "UPDATE " . $this->table . " SET nama_kategori=:nama_kategori, deskripsi=:deskripsi WHERE id_kategori=:id_kategori";

    $this->db->query($query);
    $this->db->bind('id_kategori', $id_kategori);
    $this->db->bind('nama_kategori', $nama_kategori);
    $this->db->bind('deskripsi', $deskripsi);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusKategori($id_kategori)
  {
    $query = "DELETE FROM " . $this->table . " WHERE id_kategori=:id_kategori";

    $this->db->query($query);
    $this->db->bind('id_kategori', $id_kategori);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
