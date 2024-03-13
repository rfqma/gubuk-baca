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
  }

  public function getKategoriById($kategori_id)
  {
  }

  public function addKategori($nama_kategori, $deskripsi)
  {
  }

  public function updateKategori($kategori_id, $nama_kategori, $deskripsi)
  {
  }

  public function hapusKategori($kategori_id)
  {
  }
}
