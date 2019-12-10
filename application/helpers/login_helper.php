<?php

function checkAuth(){
    $CI = & get_instance();
    $userdata = $CI->session->userdata("isLogin");
    if($userdata == NULL){
        redirect("admin/login");
    }else{
        return true;
    }
}