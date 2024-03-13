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
  }

  public function getBukuById($id_buku)
  {
  }

  public function addBuku($judul_buku, $id_kategori, $id_penulis, $id_penerbit, $tahun_terbit, $jumlah_tersedia)
  {
  }

  public function updateBuku($id_buku, $judul_buku, $id_kategori, $id_penulis, $id_penerbit, $tahun_terbit, $jumlah_tersedia)
  {
  }

  public function hapusBuku($id_buku)
  {
  }
}
