<?php

class Produk extends CI_Controller{
  public function __construct(){
    parent:: __construct();
    (!checkAuth() ? redirect("admin/login") : true );
    $this->load->model("admin/Produk_m","produkModel");
  }
  public function index(){
    $this->load->view("admin/barang_v");
  }
  public function bahanProduk(){
    $data['dataKain'] = $this->produkModel->getDataKain();
    $data['dataModel'] = $this->produkModel->getDataModel();
    $data['dataUkuran'] = $this->produkModel->getDataUkuran();
    $this->load->view("admin/BahanProduk_v", $data);
  }
  public function kelolaBarang(){
    $this->load->view("admin/kelolaProduk_v");
  }
  public function tambahKain(){
    $dataKain = [
      "nm_kain" => $this->input->post("nama_kain", "trim|required"),
      "warna_kain" => $this->input->post("warna_kain", "trim|required"),
      "harga_kain" => $this->input->post("harga_kain", "trim|required")
    ];
    $addKain = $this->produkModel->insertKain($dataKain);
    if($addKain){
      $this->session->set_flashdata("success", "Data Kain Berhasil Ditambahkan!");
      redirect("dashboard/kelola-barang");
    }else{
      $this->session->set_flashdata("error", "Ada Masalah Saat Menambahkan Data Kain!");
      redirect("dashboard/kelola-barang");
    }
  }
  public function tambahModel(){
    $dataModel = [
      "nm_model" => $this->input->post("nama_model", "trim|required"),
      "harga_model" => $this->input->post("harga_model", "trim|required"),
    ];
    $addModel = $this->produkModel->insertModel($dataModel);
    if($addModel){
      $this->session->set_flashdata("success", "Model Kain Berhasil Ditambahkan!");
      redirect("dashboard/kelola-barang");
    }else{
      $this->session->set_flashdata("error", "Ada Masalah Saat Menambahkan Model Kain!");
      redirect("dashboard/kelola-barang");
    }
  }
  public function tambahUkuran(){
    $dataUkuran = [
      "kd_ukuran" => $this->input->post("kode_ukuran", "trim|required"),
      "harga_ukuran" => $this->input->post("harga_ukuran", "trim|required"),
    ];
    $addUkuran = $this->produkModel->insertUkuran($dataUkuran);
    if($addUkuran){
      $this->session->set_flashdata("success", "Data Ukuran Berhasil Ditambahkan!");
      redirect("dashboard/kelola-barang");
    }else{
      $this->session->set_flashdata("error", "Ada Masalah Saat Menambahkan Data Ukuran!");
      redirect("dashboard/kelola-barang");
    }
  }
}
