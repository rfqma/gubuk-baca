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

  public function getBukuById($buku_id)
  {
  }

  public function addBuku($judul, $penulis, $penerbit, $tahun_terbit, $isbn, $jumlah_tersedia)
  {
  }

  public function updateBuku($buku_id, $judul, $penulis, $penerbit, $tahun_terbit, $isbn, $jumlah_tersedia)
  {
  }

  public function hapusBuku($buku_id)
  {
  }
}
