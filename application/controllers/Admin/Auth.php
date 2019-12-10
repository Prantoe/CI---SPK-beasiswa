<?php

class Auth extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        // var_dump(checkAuth());
        $this->load->model("admin/Account","account");
    }
    public function login(){
        $this->load->view("admin/login_v");
    }
    public function isLogin(){
        $credentials = [
            "email" => $this->input->post("email","trim|is_unique"),
            "password" => $this->input->post("password", "trim|is_unique")
        ];
        $isValid = $this->account->_checkCredentials($credentials);
    }
}