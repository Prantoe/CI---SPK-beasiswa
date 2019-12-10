<?php

class Account extends CI_Model{
    public function _checkCredentials($credentials){
        $checkEmail = $this->db->get_where("admin", array("email" => $credentials["email"]))->row_array();
        if($checkEmail > 0){
            // email is available
            if(password_verify($credentials["password"], $checkEmail["password"])){
                // password is valid
                $userdata["isLogin"] = [
                    "email" => $checkEmail["email"],
                    "userId" => $checkEmail["id_admin"]
                ];
                $this->session->set_userdata($userdata);
                redirect("dashboard");
            }else{
                // password not valid
                $this->session->set_flashdata("error", "<b>ERROR</b>: Invalid Password");
                redirect("admin/login");
            }
        }else{
            // email not found
            $this->session->set_flashdata("error", "<b>ERROR</b>: Invalid Email");
            redirect("admin/login");
        }
    }
}