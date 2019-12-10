<?php

function checkAuth(){
    $CI = & get_instance();
    $userdata = $CI->session->userdata("isLogin");
    return ($userdata == NULL) ? false : true;
}