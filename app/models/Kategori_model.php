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

  public function getKategoriById($id_kategori)
  {
  }

  public function addKategori($nama_kategori, $deskripsi)
  {
  }

  public function updateKategori($id_kategori, $nama_kategori, $deskripsi)
  {
  }

  public function hapusKategori($id_kategori)
  {
  }
}
