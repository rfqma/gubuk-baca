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
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultAll();
  }

  public function getPeminjamanById($id_peminjaman)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_peminjaman=:id_peminjaman');
    $this->db->bind('id_peminjaman', $id_peminjaman);
    return $this->db->resultSingle();
  }

  public function addPeminjaman($id_buku, $id_mahasiswa, $tanggal_pinjam, $tanggal_kembali)
  {
    $query = "INSERT INTO " . $this->table . " VALUES ('', :id_buku, :id_mahasiswa, :tanggal_pinjam, :tanggal_kembali)";

    $this->db->query($query);
    $this->db->bind('id_buku', $id_buku);
    $this->db->bind('id_mahasiswa', $id_mahasiswa);
    $this->db->bind('tanggal_pinjam', $tanggal_pinjam);
    $this->db->bind('tanggal_kembali', $tanggal_kembali);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updatePeminjaman($id_peminjaman, $id_buku, $id_mahasiswa, $tanggal_pinjam, $tanggal_kembali)
  {
    $query = "UPDATE " . $this->table . " SET id_buku=:id_buku, id_mahasiswa=:id_mahasiswa, tanggal_pinjam=:tanggal_pinjam, tanggal_kembali=:tanggal_kembali WHERE id_peminjaman=:id_peminjaman";

    $this->db->query($query);
    $this->db->bind('id_peminjaman', $id_peminjaman);
    $this->db->bind('id_buku', $id_buku);
    $this->db->bind('id_mahasiswa', $id_mahasiswa);
    $this->db->bind('tanggal_pinjam', $tanggal_pinjam);
    $this->db->bind('tanggal_kembali', $tanggal_kembali);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusPeminjaman($id_peminjaman)
  {
    $query = "DELETE FROM " . $this->table . " WHERE id_peminjaman=:id_peminjaman";

    $this->db->query($query);
    $this->db->bind('id_peminjaman', $id_peminjaman);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
