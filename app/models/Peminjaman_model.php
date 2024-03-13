<?php

class Peminjaman_model
{
  private $table = 'peminjaman';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPeminjaman()
  {
  }

  public function getPeminjamanById($id_peminjaman)
  {
  }

  public function addPeminjaman($id_buku, $id_mahasiswa, $tanggal_pinjam, $tanggal_kembali)
  {
  }

  public function updatePeminjaman($id_peminjaman, $id_buku, $id_mahasiswa, $tanggal_pinjam, $tanggal_kembali)
  {
  }

  public function hapusPeminjaman($id_peminjaman)
  {
  }
}
