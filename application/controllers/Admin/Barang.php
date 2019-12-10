<?php

class Barang extends CI_Controller{
  public function __construct(){
    parent:: __construct();
  }
  public function index(){
    $this->load->view("admin/barang_v");
  }
  public function bahanProduk(){
    $this->load->view("admin/BahanProduk_v");
  }
}
