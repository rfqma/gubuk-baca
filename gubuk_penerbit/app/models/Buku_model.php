<?php

class Buku_model
{
  private $table = 'buku';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllBuku()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultAll();
  }

  public function getBukuById($id_buku)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_buku=:id_buku');
    $this->db->bind('id_buku', $id_buku);
    return $this->db->resultSingle();
  }

  public function addBuku($judul_buku, $id_kategori, $id_penulis, $id_penerbit, $tahun_terbit, $jumlah_tersedia)
  {
    $query = "INSERT INTO " . $this->table . " VALUES ('', :judul_buku, :id_kategori, :id_penulis, :id_penerbit, :tahun_terbit, :jumlah_tersedia)";

    $this->db->query($query);
    $this->db->bind('judul_buku', $judul_buku);
    $this->db->bind('id_kategori', $id_kategori);
    $this->db->bind('id_penulis', $id_penulis);
    $this->db->bind('id_penerbit', $id_penerbit);
    $this->db->bind('tahun_terbit', $tahun_terbit);
    $this->db->bind('jumlah_tersedia', $jumlah_tersedia);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateBuku($id_buku, $judul_buku, $id_kategori, $id_penulis, $id_penerbit, $tahun_terbit, $jumlah_tersedia)
  {
    $query = "UPDATE " . $this->table . " SET judul_buku=:judul_buku, id_kategori=:id_kategori, id_penulis=:id_penulis, id_penerbit=:id_penerbit, tahun_terbit=:tahun_terbit, jumlah_tersedia=:jumlah_tersedia WHERE id_buku=:id_buku";

    $this->db->query($query);
    $this->db->bind('id_buku', $id_buku);
    $this->db->bind('judul_buku', $judul_buku);
    $this->db->bind('id_kategori', $id_kategori);
    $this->db->bind('id_penulis', $id_penulis);
    $this->db->bind('id_penerbit', $id_penerbit);
    $this->db->bind('tahun_terbit', $tahun_terbit);
    $this->db->bind('jumlah_tersedia', $jumlah_tersedia);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusBuku($id_buku)
  {
    $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_buku=:id_buku');
    $this->db->bind('id_buku', $id_buku);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
