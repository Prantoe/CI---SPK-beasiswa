<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//route auth
$route['admin/login'] = 'admin/auth/login';

//route for admin
$route['dashboard']['get'] = 'admin/dashboard';
$route['dashboard/barang'] = 'admin/barang';
$route['dashboard/bahan-produk'] = 'admin/barang/bahanProduk';
$route['dashboard/kelola-barang'] = 'admin/barang/kelolaBarang';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
