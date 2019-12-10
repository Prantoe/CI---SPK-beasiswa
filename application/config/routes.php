<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//route auth
$route['admin/login'] = 'admin/auth/login';

//route for admin
$route['dashboard/sign-out'] = 'admin/dashboard/signout';
$route['dashboard']['get'] = 'admin/dashboard';
$route['dashboard/customers']['get'] = 'admin/dashboard/customers';
$route['dashboard/update-customer']['post'] = 'admin/dashboard/updateCustomer';
$route['dashboard/delete-customer/(:any)']['get'] = 'admin/dashboard/deleteCustomer/$1';
$route['dashboard/barang'] = 'admin/produk';
$route['dashboard/bahan-produk'] = 'admin/produk/bahanProduk';
$route['dashboard/kelola-barang'] = 'admin/produk/kelolaBarang';

$route['dashboard/produk/tambah-kain']['post'] = 'admin/produk/tambahKain';
$route['dashboard/produk/tambah-model']['post'] = 'admin/produk/tambahModel';
$route['dashboard/produk/tambah-ukuran']['post'] = 'admin/produk/tambahUkuran';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
