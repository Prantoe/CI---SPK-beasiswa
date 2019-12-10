<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//route for admin
$route['dashboard']['get'] = 'admin/dashboard';
$route['dashboard/barang'] = 'admin/barang';
$route['dashboard/bahan-produk'] = 'admin/barang/bahanProduk';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
