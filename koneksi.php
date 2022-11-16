<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'livesearch');

// Buat Koneksinya 
$db1 = new mysqli(HOST, USER, PASS, DB1);

$alamat_query = "select * from tbl_mahasiswa_search GROUP BY alamat";
$alamat_query = mysqli_query($db1, $alamat_query);
?>
