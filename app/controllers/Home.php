<?php

class Home extends Controller
{
  public function index()
  {
    $data['judul'] = 'Home - Gubuk Baca';

    $this->view('home/index', $data);
  }
}
