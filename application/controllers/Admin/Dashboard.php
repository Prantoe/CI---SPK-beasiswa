<?php

class Dashboard extends CI_Controller{
  public function __construct(){
    parent::__construct();
    (!checkAuth() ? redirect("admin/login") : true );
    $this->load->model("admin/Dashboard_m", "dashboardModel");
  }
  public function index(){
    $this->load->view("admin/dashboard_v");
  }
  public function customers(){
    $data['dataCustomers'] = $this->dashboardModel->getDataCustomers();
    $this->load->view("admin/customers_v", $data);
  }
  public function updateCustomer(){
    $customer = [
      "id_cust" => $this->input->post("id_cust"),
      "nm_cust" => $this->input->post("nm_cust", "trim|required"),
      "jns_kel" => $this->input->post("jns_kel", "trim|required"),
      "alamat" => $this->input->post("alamat", "trim|required"),
      "kontak" => $this->input->post("kontak", "trim|required")
    ];
    $updateCustomer = $this->dashboardModel->updateCustomer($customer);
    if($updateCustomer){
      $this->session->set_flashdata("success", "Update Successful!");
      redirect("dashboard/customers");
    }else{
      $this->session->set_flashdata("error", "<b>ERROR</b>: Cannot update customer!");
      redirect("dashboard/customers");
    }
  }

  public function deleteCustomer($customerId){
    $deleteCustomer = $this->dashboardModel->deleteCustomer($customerId);
    if($deleteCustomer){
      $this->session->set_flashdata("success", "Customer has been deleted!");
      redirect("dashboard/customers");
    }else{
      $this->session->set_flashdata("error", "<b>ERROR</b>: Cannot delete customers!");
      redirect("dashboard/customers");
    }
  }

  public function signout(){
    $userdata = $this->session->all_userdata();
    $this->session->unset_userdata($userdata);
    $this->session->sess_destroy();
    redirect("admin/login");
  }

}
