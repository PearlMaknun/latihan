<?php
/**
 * Namafile : koneksi.php 
 * ----------------------------*/

$dbhost = '127.0.0.1'; 
$dbuser = 'root';     // ini berlaku di xampp
$dbpass = '';         // ini berlaku di xampp
$dbname = 'latihan_join';

// melakukan koneksi ke database
$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

// cek koneksi yang kita lakukan berhasil atau tidak
if ($connect->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $connect->connect_error);
}

?>