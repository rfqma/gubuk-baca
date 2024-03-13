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

  public function getPeminjamanById($peminjaman_id)
  {
  }

  public function addPeminjaman($buku_id, $mahasiswa_id, $tanggal_pinjam, $tanggal_kembali)
  {
  }

  public function updatePeminjaman($peminjaman_id, $buku_id, $mahasiswa_id, $tanggal_pinjam, $tanggal_kembali)
  {
  }

  public function hapusPeminjaman($peminjaman_id)
  {
  }
}
