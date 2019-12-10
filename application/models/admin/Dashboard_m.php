<?php

class Dashboard_m extends CI_Model{
    public function getDataCustomers(){
        return $this->db->get("customer")->result_array();
    }
    public function updateCustomer($customer){
        $this->db->set("nm_cust", $customer["nm_cust"]);
        $this->db->set("jns_kel", $customer["jns_kel"]);
        $this->db->set("alamat", $customer["alamat"]);
        $this->db->set("kontak", $customer["kontak"]);
        $this->db->where("id_cust", $customer["id_cust"]);
        return $this->db->update("customer");
    }
    public function deleteCustomer($customerId){
        return $this->db->delete("customer", array("id_cust" => $customerId));
    }
}