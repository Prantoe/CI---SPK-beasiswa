<?php

class Dashboard extends CI_Controller{
  public function __construct(){
    parent::__construct();
    checkAuth();
  }
  public function index(){
    $this->load->view("admin/dashboard_v");
  }

}
